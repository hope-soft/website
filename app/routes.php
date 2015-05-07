<?php

Route::get('/','HomeController@index');
Route::get('admin','HomeController@create');
Route::resource('home','HomeController');

Route::group(array('before' => 'auth'), function()
{
    Route::resource('adminPanel','AdminController');
    Route::resource('project','ProjectController');
    Route::resource('type','TypeController');
    Route::get('logout','HomeController@destroy');
    Route::get('password','AdminController@update');
    Route::get('project','ProjectController@create');
    Route::get('type','TypeController@create');
});
