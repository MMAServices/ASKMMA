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

Route::view('/', 'landing');
Route::view('/about', 'pages.about');
Route::view('/services', 'pages.services');
Route::view('/contact', 'pages.contact');
Route::view('/community-outreach', 'pages.community-outreach');
Route::view('/feedback', 'pages.feedback');
Route::view('/resource', 'pages.resources');
Route::view('/plan-finder', 'pages.plan-finder');
Route::view('/products', 'pages.products');
Route::view('/careers', 'pages.careers');
Route::view('/terms-and-conditions', 'pages.terms-and-conditions');
Route::view('/privacy-policy', 'pages.privacy-policy');

Auth::routes(['register' => false]);

Route::group(['middleware' => 'auth'], function () {
    Route::get('/management', 'HomeController@index')->name('home');
    Route::resources(['api/careers' => 'CareerController']);
});
