<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


    Route::get('/', ["uses" => "ContactController@Index", "as"  => "contact"]);
    Route::post("/contact", ["uses" => "ContactController@ContactUs", "as"  => "contact_us"]); 

