<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\services;

class serviceController extends Controller
{
    public function adminService(){
        return view('adminService');
    }

    public function getServiceTableData(){
        $dbSelect = services::get();
        $dbSelect = json_encode($dbSelect);
        return $dbSelect;
    }
    public function serviceAddUrl(Request $request){
        $request->session()->forget('serviceName');
        $request->session()->forget('serviceDesc');

        $serviceName = $request->input('serviceName');
        $serviceDesc = $request->input('serviceDesc');

        $result = services::insert([
            'service_name' => $serviceName,
            'service_details' => $serviceDesc
        ]);

        $request->session()->put('serviceName',$serviceName);
        $request->session()->put('serviceDesc',$serviceDesc);

        if($result==true){
            return 1;
        }
        else{
            return 0;
        }
    }

    public function serviceImageInsert(Request $request){
        $serviceName = $request->session()->get('serviceName');
        $serviceDesc = $request->session()->get('serviceDesc');
        
        $imagePath = $request->file('servicefileData')->store('public');
        $imageName = (explode('/',$imagePath))[1];
        $hostName = $_SERVER['HTTP_HOST'];
        $first = "http://";

        $finalImageName = $first.$hostName."/storage/".$imageName;

        $result = services::where('service_name','=',$serviceName)->where('service_details','=',$serviceDesc)->update(['service_image'=> $finalImageName]);
    }

    public function serviceDeleteURL(Request $request){
        $delete = $request->input('serviecDltID');
        $result = services::where('service_id','=',$delete)->delete();

        if($result==true){
            return 1;
        }
        else{
            return 0;
        }
    }

    public function updateServiceGet(Request $request){
        $id = $request->input('id');
        $result = services::where('service_id','=',$id)->get();

        if($result==true){
            return json_encode($result);
        }
        else{
            return 0;
        }
    }

    public function serviceUpdateURL(Request $request){
        $request->session()->forget('serviceNameUpdate');
        $request->session()->forget('serviceDescUpdate');

        $serviceUpdateID = $request->input('serviceUpdateID');

        $serviceNameUpdate = $request->input('serviceNameUpdate');
        $serviceDescUpdate = $request->input('serviceDescUpdate');

        $result = services::where('service_id','=',$serviceUpdateID)->update([
            'service_name' => $serviceNameUpdate,
            'service_details' => $serviceDescUpdate
        ]);

        $request->session()->put('serviceNameUpdate',$serviceNameUpdate);
        $request->session()->put('serviceDescUpdate',$serviceDescUpdate);

        if($result==true){
            return 1;
        }
        else{
            return 0;
        }
    }

    public function serviceImageUpdate(Request $request){
        $serviceNameUpdate = $request->session()->get('serviceNameUpdate');
        $serviceDescUpdate = $request->session()->get('serviceDescUpdate');
        
        $imagePath = $request->file('servicefileData')->store('public');
        $imageName = (explode('/',$imagePath))[1];
        $hostName = $_SERVER['HTTP_HOST'];
        $first = "http://";

        $finalImageName = $first.$hostName."/storage/".$imageName;

        $result = services::where('service_name','=',$serviceNameUpdate)->where('service_details','=',$serviceDescUpdate)->update(['service_image'=> $finalImageName]);

        if($result==true){
            return 1;
        }
        else{
            return 0;
        }
    }
}
