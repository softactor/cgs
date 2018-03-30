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

Route::get('/', function () {
    return view('welcome');
});

Route::get('first_route', function(){
	return view("home");
});

Route::get("first_controller", "AgeController@getage");


// Restricted area

Route::get("admin/subject_entry_form","Backend\SubjectsController@subject_entry_form");
Route::post("admin/subject_entry_store","Backend\SubjectsController@subject_entry_store");

// Service related route
Route::get("admin/service_entry_form","Backend\ServicesController@service_entry_form");
Route::post("admin/service_entry_store","Backend\ServicesController@service_entry_store");


// Sub Service related route
Route::get("admin/sub_service_entry_form","Backend\SubServicesController@sub_service_entry_form");
Route::post("admin/sub_service_entry_store","Backend\SubServicesController@sub_service_entry_store");

// Problem related route
Route::get("admin/problem_entry_form","Backend\ProblemController@problem_entry_form");
Route::post("admin/problem_entry_store","Backend\ProblemController@problem_entry_store");

// Solution related route
Route::get("admin/solution_entry_form","Backend\SolutionController@solution_entry_form");
Route::post("admin/solution_entry_store","Backend\SolutionController@solution_entry_store");