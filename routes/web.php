<?php


Route::get('/', function () {
    return Redirect::to('/login');
});
Route::get('/register', function () {
    return Redirect::to('/login');
});

Route::get('/password/reset', function () {
    return Redirect::to('/login');
});


/*  ADMIN ROUTES */
Route::group(['middleware' => 'auth', 'prefix' => 'admin'], function () {
    Route::get('/', 'Admin\IndexController@index');
});



/*  API ROUTES  */
Route::get('/api/test', function () {
    return '<h2>Hello test</h2>';
});

Auth::routes();