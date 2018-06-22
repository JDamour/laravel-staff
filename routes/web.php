<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/profile/{id}', function ($id) {

    $profile= DB::table('staff')
        ->where('staff.id', '=', $id)
        ->first();
    return view('profile',compact('profile'));
});
Route::get('/search/{name}/{content}', function ($name,$content) {
    $sideGenders = DB::select("SELECT DISTINCT gender  FROM `staff`");
    $sideCivilS = DB::select("SELECT DISTINCT civil_status  FROM `staff`");
    $sidePOSITIONS = DB::select("SELECT DISTINCT current_position  FROM `staff`");

    $staffs= DB::table('staff')
        ->where('staff.'.$name, '=', $content)
        ->get();
    return view('side',compact('staffs','sidePOSITIONS','sideGenders','sideCivilS'));
});
Route::get('/graph', function () {
    $id=1;
    $profile= DB::table('staff')
        ->where('staff.id', '=', $id)
        ->first();
    return view('graph',compact('profile'));
});
Route::get('search/columns', ['as' => 'search', 'uses' => 'StaffController@search']);
Route::resource('/','StaffController');