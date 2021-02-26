<?php

Route::group(['prefix' => 'admin', 'namespace' => 'Admin', 'as' => 'admin.'], function(){

    /** Formulário de login */
    Route::get('/', 'AuthController@showLoginForm')->name('login');
    Route::post('login', 'AuthController@login')->name('login.do');

    /** Rotas protegidas */
    Route::group(['middleware' => ['auth']], function(){

        /** Dashboard home */
        Route::get('home', 'AuthController@home')->name('home');

        /** Users */
        Route::get('users/team', 'UserController@team')->name('users.team');
        Route::resource('users', 'UserController');
    });

    /** Logout */
    Route::get('logout', 'AuthController@logout')->name('logout');

});
