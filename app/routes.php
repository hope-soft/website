<?php

 Route::get('/','HomeController@index');
 Route::get('admin','HomeController@create');
 Route::resource('home','HomeController');

 Route::get('user/login',array('as'=>'login','uses'=>'UserController@login'));
 Route::post('user/login',array('as'=>'login','uses'=>'UserController@check'));
 Route::get('user/new',array('as'=>'new-user','uses'=>'UserController@index'));
 Route::post('user/new',array('as'=>'new-user', 'uses'=>'UserController@store'));
 Route::get('user/profile',array('as'=>'profile', 'uses'=>'UserController@show'));
 Route::get('user/edit/{id}', array('as'=>'edit-user','uses'=>'UserController@edit'));
 Route::get('user/update/{id}' ,array('as'=>"update-user",'uses'=>'UserController@update'));
 Route::post('user/update' ,array('as'=>"update-user",'uses'=>'UserController@update'));
 Route::get('user/delete/{id}',array('as'=>'delete-user','uses'=>'UserController@destroy'));

 Route::group(array('before' => 'auth'), function()
 {
    Route::resource('adminPanel','AdminController');
    Route::resource('project','ProjectController');
    Route::resource('type','TypeController');
    Route::resource('role','RoleController');
    Route::get('logout','HomeController@destroy');
    Route::get('password','AdminController@update');
    Route::get('project','ProjectController@create');
    Route::get('type','TypeController@create');
    Route::get('role','RoleController@create');
    

 });
