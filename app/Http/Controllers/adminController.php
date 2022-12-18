<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\visitors;
use App\Models\job_apply_form;
use App\Models\needServiceModal;
use App\Models\JobModel;

class adminController extends Controller
{
    function admin(){
        $visitors = visitors::count();
        $jobApplication = job_apply_form::count();
        $needServiceApplication = needServiceModal::count();
        $jobs = JobModel::count();
        return view('admin',[
            'visitors'=>$visitors,
            'jobApplication'=>$jobApplication,
            'needServiceApplication'=>$needServiceApplication,
            'jobs'=>$jobs
        ]);
    }

}
