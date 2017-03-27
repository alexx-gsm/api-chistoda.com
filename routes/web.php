<?php

Route::get('/', function () {
    return Redirect::to('/admin');
});


/*  ADMIN ROUTES */
Route::group(['middleware' => 'auth', 'prefix' => 'admin'], function () {
    Route::get('/', 'Admin\IndexController@index');
});

Auth::routes();

/*  API ROUTES  */
Route::get('/api/test', function () {
    return '<h2>Hello test</h2>';
});