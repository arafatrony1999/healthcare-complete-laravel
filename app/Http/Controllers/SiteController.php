<?php

namespace App\Http\Controllers;

use App\Models\admin_user_model;
use App\Models\ContactModel;
use App\Models\job_apply_form;
use App\Models\visitors;
use App\Models\JobModel;
use App\Models\services;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use App\Mail\MailNotify;

class SiteController extends Controller
{
    function mail(){
        $data = ['name' => 'Arafat', 'subject' => 'Verify your account', 'body' => 'Hello world', 'code' => 215952];
        Mail::to('arafat.rony1999@gmail.com')->queue(new MailNotify($data));
        return 1;
    }

    function index(Request $request) {

        $visitors_ip = $request->ip();

        date_default_timezone_set("Asia/Dhaka");
        $timeDate = date("d-m-y h:i:sa");
        visitors::insert([
            'ip'=>$visitors_ip,
            'time_date'=>$timeDate
        ]);
        $services = services::all();
        $result = DB::table('find_jobs')->take(1)->orderBy('id','desc')->get();

        return view('index',[
            'result'=>$result,
            'services'=>$services
        ]);

    }
    function about(Request $request) {
        return view('about');
    }
    function services() {
        return view('services');
    }
    function contact() {
        return view('contact');
    }
    function job() {
        return view('job');
    }
    function faq() {
        return view('faq');
    }
    function allJobs(){
        $results = JobModel::orderBy('id','desc')->get();
        return view('allJobs',['results'=>$results]);
    }
    function apply(Request $request) {
        $sessionfirstName = $request->session()->get('sessionfirstName');
        $sessionlastName = $request->session()->get('sessionlastName');
        $sessionPhoneNumber = $request->session()->get('sessionPhoneNumber');
        $sessionEmailAddr = $request->session()->get('sessionEmailAddr');
        $sessionNID = $request->session()->get('sessionNID');

        if($sessionfirstName && $sessionlastName && $sessionPhoneNumber && $sessionEmailAddr && $sessionNID){
            return redirect('verify_account')->with(['email' => $sessionEmailAddr]);
        }else{
            return view('job_apply');
        }
    }
    function form() {
        return view('form');
    }
    function login(){
        return view('login');
    }


    function axiosInsert(Request $request) {

        $firstName = $request->input('firstName');
        $lastName = $request->input('lastName');
        $gender = $request->input('gender');
        $phoneNumber = $request->input('phoneNumber');
        $emailaddrs = $request->input('emailaddrs');
        $FBid = $request->input('FBid');
        $services = $request->input('services');
        $addr = $request->input('addr');
        $city = $request->input('city');
        $zip = $request->input('zip');
        $nid = $request->input('nid');
        $result = DB::insert('INSERT INTO `aponsebaform` (`firstName`, `lastName`, `gender`, `number`, `email`, `FB`, `service`, `address`, `city`, `zip`, `nid`) VALUES (?,?,?,?,?,?,?,?,?,?,?)',[$firstName, $lastName, $gender, $phoneNumber, $emailaddrs, $FBid, $services, $addr, $city, $zip, $nid]);

        if($result==true){
            return 1;
        }else{
            return 0;
        }
    }
    
    function applyFormInsert(Request $request) {
        $firstName = $request->input('firstName');
        $lastName = $request->input('lastName');
        $gender = $request->input('gender');
        $phoneNumber = $request->input('phoneNumber');
        $emailaddrs = $request->input('emailaddrs');
        $FBid = $request->input('FBid');
        $addr = $request->input('addr');
        $city = $request->input('city');
        $zip = $request->input('zip');
        $nid = $request->input('nid');

        $validCode = random_int(100000, 999999);
        $code_time = time();

        if($request->hasFile('fileData1')){
            $imagePath = $request->file('fileData1')->store('public');
            $imageName = (explode('/',$imagePath))[1];
            $hostName = $_SERVER['HTTP_HOST'];
            $first = "http://";
    
            $finalImageName = $first.$hostName."/storage"."/".$imageName;
            
            $form = new job_apply_form();
            $form->firstName = $firstName;
            $form->lastName = $lastName;
            $form->gender = $gender;
            $form->number = $phoneNumber;
            $form->email = $emailaddrs;
            $form->FB = $FBid;
            $form->address = $addr;
            $form->city = $city;
            $form->zip = $zip;
            $form->nid = $nid;
            $form->valid_code = $validCode;
            $form->image = $finalImageName;
            $form->code_time = $code_time;
            $form->save();

            $id = $form->id;
        }else{
            $form = new job_apply_form();
            $form->firstName = $firstName;
            $form->lastName = $lastName;
            $form->gender = $gender;
            $form->number = $phoneNumber;
            $form->email = $emailaddrs;
            $form->FB = $FBid;
            $form->address = $addr;
            $form->city = $city;
            $form->zip = $zip;
            $form->nid = $nid;
            $form->valid_code = $validCode;
            $form->code_time = $code_time;
            $form->save();

            $id = $form->id;
        }


        $data = ['firstName'=>$firstName,'lastName'=>$lastName,'email'=>$emailaddrs,'subject' => 'Verify your account','code' => $validCode];

        Mail::to($emailaddrs)->send(new MailNotify($data));


        
        $request->session()->put('sessionfirstName',$firstName);
        $request->session()->put('sessionlastName',$lastName);
        $request->session()->put('sessionPhoneNumber',$phoneNumber);
        $request->session()->put('sessionEmailAddr',$emailaddrs);
        $request->session()->put('sessionNID',$nid);
        $request->session()->put('id',$id);

        return 1;
    }

    function verify_account(Request $request){
        $sessionfirstName = $request->session()->get('sessionfirstName');
        $sessionlastName = $request->session()->get('sessionlastName');
        $sessionPhoneNumber = $request->session()->get('sessionPhoneNumber');
        $sessionEmailAddr = $request->session()->get('sessionEmailAddr');
        $sessionNID = $request->session()->get('sessionNID');
        $id = $request->session()->get('id');

        if($sessionfirstName && $sessionlastName && $sessionPhoneNumber && $sessionEmailAddr && $sessionNID){
            return view('validation', ['email' => $sessionEmailAddr, 'id' => $id]);
        }else{
            return redirect('/apply')->with(['register_need_message' => 'You need to register first']);
        }
    }

    function account_validation(Request $request){
        $code = $request->code;
        
        $sessionfirstName = $request->session()->get('sessionfirstName');
        $sessionlastName = $request->session()->get('sessionlastName');
        $sessionPhoneNumber = $request->session()->get('sessionPhoneNumber');
        $sessionEmailAddr = $request->session()->get('sessionEmailAddr');
        $sessionNID = $request->session()->get('sessionNID');
        $id = $request->session()->get('id');

        $main_code = job_apply_form::where('id', $id)->where('firstName',$sessionfirstName)->where('lastName',$sessionlastName)->where('number',$sessionPhoneNumber)->where('email',$sessionEmailAddr)->where('nid',$sessionNID)->get('valid_code')[0]->valid_code;

        if($code === $main_code){
            $code_time = job_apply_form::where('id', $id)->where('firstName',$sessionfirstName)->where('lastName',$sessionlastName)->where('number',$sessionPhoneNumber)->where('email',$sessionEmailAddr)->where('nid',$sessionNID)->get('code_time')[0]->code_time;
            if(time() - $code_time <= 120){
                job_apply_form::where('id', $id)->where('firstName',$sessionfirstName)->where('lastName',$sessionlastName)->where('number',$sessionPhoneNumber)->where('email',$sessionEmailAddr)->where('nid',$sessionNID)->update([
                    'valid_status' => 'valid'
                ]);
                
                session()->flush();
            }else{
                return redirect()->back()->with(['validity' => false, 'email' => $sessionEmailAddr, 'id' => $id]);
            }
        }else{
            return redirect()->back()->with(['code_error' => 'The code you entered is incorrect! Please Check again', 'email' => $sessionEmailAddr, 'id' => $id]);
        }
    }

    function new_verification_code(Request $request){
        $email = $request->email;
        $id = $request->id;

        $sessionfirstName = $request->session()->get('sessionfirstName');
        $sessionlastName = $request->session()->get('sessionlastName');

        $validCode = random_int(100000, 999999);
        $code_time = time();

        job_apply_form::where('id', $id)->where('email', $email)->update([
            'valid_code' => $validCode,
            'code_time' => $code_time
        ]);

        $data = ['firstName'=>$sessionfirstName,'lastName'=>$sessionlastName,'email'=>$email,'subject' => 'Verify your account','code' => $validCode];

        Mail::to($email)->send(new MailNotify($data));

        return redirect()->back()->with(['resend' => true]);
    }


    function validityURL(Request $request){
        $code = $request->input('code');

        $count = job_apply_form::where('valid_code','=', $code)->count();

        if($count==1){
            $result = job_apply_form::where('valid_code','=', $code)->update([
                'valid_status'=>'valid'
            ]);

            if($result==true){
                return 1;
            }
            else{
                return 0;
            }
        }
        else{
            return 0;
        }
    }

    function abcd(Request $request){
        return $request->session()->get('sessionsessionfirstName');
        return $request->session()->get('sessionlastName');
        return $request->session()->get('sessionPhoneNumber');
        return $request->session()->get('sessionEmailAddr');
        return $request->session()->get('sessionNID');
    }

    function adminForm() {
        return view('adminForm');
    }

    
    function getTableData() {
        $dbSelect = DB::select('select * from `aponsebaform`');
        $dbSelect = json_encode($dbSelect);
        return $dbSelect;
    }

    function adminTable(){
        return view('adminNeedServiceTable');
    }

    function axiosDelete(Request $request) {
        $id = $request->input('id');
        $result = DB::delete('DELETE FROM `aponsebaform` WHERE `id`=?',[$id]);

        if($result==true){
            return "success";
        }else{
            return "failed";
        }
    }
    function axiosFormDataDelete(Request $request){
        $id = $request->input('id');
        $result = DB::delete('DELETE FROM `job_apply_form` WHERE `id`=?',[$id]);

        if($result==true){
            return "success";
        }else{
            return "failed";
        }
    }

    function adminJobTable(){
        return view('adminJobTable');
    }

    function getAllData(){
        $dbSelect = DB::select('SELECT * FROM `job_apply_form`');
        $dbSelect = json_encode($dbSelect);
        return $dbSelect;
    }

    function job_post(){
        return view('adminJobPost');
    }

    function onsubmitjobform(Request $request){
        $service = $request->input('service');
        $address = $request->input('address');
        $problem = $request->input('problem');
        $age = $request->input('age');
        $gender = $request->input('gender');
        $shiftnull = $request->input('shift');
        $shift = $shiftnull." "."ঘন্টা";
        $result = DB::insert('INSERT INTO `find_jobs` (`needservice`, `patientaddress`, `problem`, `age`, `gender`, `shift`) VALUES (?,?,?,?,?,?)',[$service,$address,$problem,$age,$gender,$shift]);
        
        if($result==true){
            return 1;
        }
        else{
            return 0;
        }
    }

    function adminCheck(Request $request){
        $adminUserName = $request->input('adminUserName');
        $adminPassword = $request->input('adminPassword');

        $result = admin_user_model::where('user_name','=',$adminUserName)->where('user_password','=',$adminPassword)->count();

        if($result==1){
            $request->session()->put('loginSession',$adminUserName);
            return 1;
        }
        else{
            return 0;
        }
    }

    function getVisitorsData(){
        $visitorsSelect = visitors::all();
        $visitorsSelect = json_encode($visitorsSelect);
        return $visitorsSelect;
    }

    function siteVisitor(){
        return view('adminSiteVisitor');
    }

    function logout(Request $request){
        if($request->session()->has('loginSession')){
            $request->session()->forget('loginSession');
            return redirect('/login');
        }
        else{
            return redirect('/admin');
        }
    }

    function contactFormDataSubmit(Request $request){
        $fullName = $request->input('fullName');
        $contactPhoneNumber = $request->input('contactPhoneNumber');
        $contactEmail = $request->input('contactEmailAddr');
        $contactMessege = $request->input('contactMessege');

        ContactModel::insertOrIgnore([
            'fullName'=>$fullName,
            'contactPhoneNumber'=>$contactPhoneNumber,
            'contactEmail'=>$contactEmail,
            'contactMessege'=>$contactMessege
        ]);
    }

    function getContactTableData(Request $request){
        $contactTableData = ContactModel::all();
        $contactTableData = json_encode($contactTableData);
        return $contactTableData;
    }

    function adminContact(){
        return view('adminContact');
    }

    function ContactFormDataDelete(Request $request){
        $id = $request->input('id');
        $result = ContactModel::where('id','=',$id)->delete();
        
        if($result==true){
            return 1;
        }else{
            return 0;
        }
    }

    function adminJobManage(){
        return view('adminJobManage');
    }

    function getAllJobTablePostData(){
        $JobTableData = JobModel::get();
        $JobTableData = json_encode($JobTableData);
        return $JobTableData;
    }
    function JobPageDataDelete(Request $request){
        $id = $request->input('id');
        $result = JobModel::where('id','=',$id)->delete();

        if($result==true){
            return 1;
        }
        else{
            return 0;
        }
    }

    function getValueUrl(Request $request){
        $id = $request->input('UpdateJobID');
        $result = JobModel::where('id','=',$id)->get();
        $result = json_encode($result);
        return $result;
    }

    function updateURL(Request $request){
        $getJobMainID = $request->input('getJobMainID');

        $jobService = $request->input('jobService');
        $jobAddress = $request->input('jobAddress');
        $jobProblem = $request->input('jobProblem');
        $jobAge = $request->input('jobAge');
        $jobGender = $request->input('jobGender');
        $jobShift = $request->input('jobShift');

        $result = JobModel::where('id',$getJobMainID)->update([
            'needservice'=>$jobService,
            'patientaddress'=>$jobAddress,
            'problem'=>$jobProblem,
            'age'=>$jobAge,
            'gender'=>$jobGender,
            'shift'=>$jobShift
        ]);


        if($result==true){
            return 1;
        }
        else{
            return 0;
        }
    }
}
