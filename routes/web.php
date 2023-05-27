<?php

use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Route;


// Route::post('/validityURL', 'App\Http\Controllers\SiteController@validityURL');

// main routs
Route::get('/', 'App\Http\Controllers\SiteController@index');

Route::get('/about', 'App\Http\Controllers\SiteController@about');

Route::get('/services', 'App\Http\Controllers\SiteController@services');

Route::get('/contact', 'App\Http\Controllers\SiteController@contact');

Route::get('/job', 'App\Http\Controllers\SiteController@job');

Route::get('/faq', 'App\Http\Controllers\SiteController@faq');

Route::get('/allJobs', 'App\Http\Controllers\SiteController@allJobs');

Route::get('/apply', 'App\Http\Controllers\SiteController@apply');

Route::get('/form', 'App\Http\Controllers\SiteController@form');
Route::get('/verify_account', 'App\Http\Controllers\SiteController@verify_account');
Route::get('/new_verification_code', 'App\Http\Controllers\SiteController@new_verification_code');

Route::post('/account_validation', 'App\Http\Controllers\SiteController@account_validation');


// routes for admin log out
Route::get('/logout', 'App\Http\Controllers\SiteController@logout');

// routes for admin login
Route::get('/login', 'App\Http\Controllers\SiteController@login')->middleware('adminMiddleware');

// admin dashboard route
Route::get('/admin', 'App\Http\Controllers\adminController@admin')->middleware('loginMiddleware');

// route for admin contact table 
Route::get('/adminContact', 'App\Http\Controllers\SiteController@adminContact')->middleware('loginMiddleware');

// route for admin service table 
Route::get('/adminService', 'App\Http\Controllers\serviceController@adminService')->middleware('loginMiddleware');
Route::get('/getServiceTableData', 'App\Http\Controllers\serviceController@getServiceTableData')->middleware('loginMiddleware');
Route::post('/serviceAddUrl', 'App\Http\Controllers\serviceController@serviceAddUrl')->middleware('loginMiddleware');
Route::post('/serviceImageInsert', 'App\Http\Controllers\serviceController@serviceImageInsert')->middleware('loginMiddleware');
Route::post('/serviceDeleteURL', 'App\Http\Controllers\serviceController@serviceDeleteURL')->middleware('loginMiddleware');
Route::post('/serviceUpdateURL', 'App\Http\Controllers\serviceController@serviceUpdateURL')->middleware('loginMiddleware');
Route::post('/updateServiceGet', 'App\Http\Controllers\serviceController@updateServiceGet')->middleware('loginMiddleware');
Route::post('/serviceImageUpdate', 'App\Http\Controllers\serviceController@serviceImageUpdate')->middleware('loginMiddleware');





// Admin table for job apply data
Route::get('/adminJobTable', 'App\Http\Controllers\SiteController@adminJobTable')->middleware('loginMiddleware');
Route::get('/getAllData', 'App\Http\Controllers\SiteController@getAllData');

// Contact form insert data by axios
Route::post('/contactFormDataSubmit', 'App\Http\Controllers\SiteController@contactFormDataSubmit');

Route::post('/axiosInsert', 'App\Http\Controllers\SiteController@axiosInsert');


Route::post('/applyFormInsert', 'App\Http\Controllers\SiteController@applyFormInsert');
Route::post('/applyFormImageInsert', 'App\Http\Controllers\SiteController@applyFormImageInsert');


Route::post('/axiosDelete', 'App\Http\Controllers\SiteController@axiosDelete')->middleware('loginMiddleware');
Route::post('/axiosFormDataDelete', 'App\Http\Controllers\SiteController@axiosFormDataDelete')->middleware('loginMiddleware');
Route::get('/adminForm', 'App\Http\Controllers\SiteController@adminForm')->middleware('loginMiddleware');


Route::get('/getTableData', 'App\Http\Controllers\SiteController@getTableData')->middleware('loginMiddleware');
Route::get('/adminTable', 'App\Http\Controllers\SiteController@adminTable')->middleware('loginMiddleware');
// Route::get('/abcd', 'App\Http\Controllers\SiteController@abcd');
Route::get('/jobPost', 'App\Http\Controllers\SiteController@job_post')->middleware('loginMiddleware');
Route::post('/onsubmitjobform', 'App\Http\Controllers\SiteController@onsubmitjobform')->middleware('loginMiddleware');

Route::post('/adminCheck', 'App\Http\Controllers\SiteController@adminCheck');
Route::get('/siteVisitor', 'App\Http\Controllers\SiteController@siteVisitor')->middleware('loginMiddleware');
Route::get('/getVisitorsData', 'App\Http\Controllers\SiteController@getVisitorsData')->middleware('loginMiddleware');

// Get contact table data by axios 
Route::get('/getContactTableData', 'App\Http\Controllers\SiteController@getContactTableData')->middleware('loginMiddleware');
// Delete contact table data by axios 
Route::post('/ContactFormDataDelete', 'App\Http\Controllers\SiteController@ContactFormDataDelete');

// Get available jobs data 
Route::get('/getAllJobTablePostData', 'App\Http\Controllers\SiteController@getAllJobTablePostData');

// Route for available jobs data 
Route::get('/adminJobManage', 'App\Http\Controllers\SiteController@adminJobManage');
// Delete available job data 
Route::post('/JobPageDataDelete', 'App\Http\Controllers\SiteController@JobPageDataDelete');
// Route for get job table data in modal 
Route::post('/getValueUrl', 'App\Http\Controllers\SiteController@getValueUrl');
// Route for update job table data 
Route::post('/updateURL', 'App\Http\Controllers\SiteController@updateURL');

// Migration route 
Route::get('migrate', function () {
    if(Artisan::call('migrate')==true){
        return 1;
    }
    else{
        return 0;
    }
});

Route::get('clear', function () {
    Artisan::call('config:clear');
    Artisan::call('cache:clear');
});

Route::get('/mail', 'App\Http\Controllers\SiteController@mail');
