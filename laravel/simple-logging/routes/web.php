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

Route::get('/automatic', function () {
    
    throw new \Exception("This exception should be automatically reported to Rollbar.");
});

Route::get('/manual', function () {
    
    \Log::info("This is a manual message reported to Rollbar.");
    
    return view('manual');
});

Route::get('/context', function () {
    
    \Log::info(
        new \Exception("This is a manual message with context data reported to Rollbar."),
        array("foo" => "bar")
    );
    
    return view('context');
});