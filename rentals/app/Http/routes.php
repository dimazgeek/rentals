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
# ------------------------------------
# Authentication
# ------------------------------------
Route::get('/login', 'Auth\AuthController@getLogin');
Route::post('/login', 'Auth\AuthController@postLogin');
Route::get('/register', 'Auth\AuthController@getRegister');
Route::post('/register', 'Auth\AuthController@postRegister');
Route::get('/logout', 'Auth\AuthController@logout');
# Debugging route just to show whether you're logged in or not
Route::get('/show-login-status', function() {
    # You may access the authenticated user via the Auth facade
    $user = Auth::user();
    if($user) {
        echo 'You are logged in.';
        dump($user->toArray());
    } else {
        echo 'You are not logged in.';
    }
    return;
});

Route::group(['middleware' => 'auth'], function() {
    
    Route::get('/', 'CarController@getIndex');
    Route::get('/{id?}', 'CarController@getDelete');
    Route::get('/car/ava', 'CarController@getAvalaible');
    Route::get('/car/pickup', 'CarController@getPick');
    Route::get('/car/edit/{id?}', 'CarController@getEdit');
    Route::post('/car/save', 'CarController@postEdit');
    Route::post('/member/create', 'CarController@postCreate');
    Route::get('/member/create', 'CarController@getCreate');
    Route::get('/member/member', 'CarController@getMember');
    Route::post('/car/create', 'CarController@postAddCar');
    Route::get('/car/create', 'CarController@getAddCar');
});



//Route::get('/car', 'CarController@getMember');

