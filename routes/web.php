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

Route::get('/', 'Main@p1PersonalInfo');  // p1_Personal_Info - page 1 ; Personal Info
Route::post('/', 'Main@get1PersonalInfo');  // get_1_Personal_Info - get info ; from page 1 ;  Personal Info
Route::get('/your-home', 'Main@p2YourHome');
Route::post('/your-home', 'Main@get2YourHome');
Route::get('/materials', 'Main@p3Materials');
Route::post('/materials', 'Main@get3Materials');
Route::get('/extras', 'Main@p4Extras');
Route::post('/extras', 'Main@get4Extras');