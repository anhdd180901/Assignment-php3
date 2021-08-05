<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', [HomeController::class, 'index'])->name('homePage');

//login
Route::get('/login', "LoginController@getLogin")->name('login.getLogin');
Route::post('/login', "LoginController@postLogin");

//logout
Route::get('/logout', "LoginController@getLogout")->name('logout.getLogout');

//admin
Route::prefix('admin')->group(function () {
    Route::prefix('room')->group(function () {

        //list
        Route::get('/list', [
            'as' => 'room.getList',
            'uses' => 'Admin\RoomController@getList',
            'middleware' => 'testLogin' // nhu nay la co quyen`
        ]);

        //add
        Route::get('/add', [
            'as' => 'room.getAdd',
            'uses' => 'Admin\RoomController@getAdd',
            'middleware' => 'testLogin' // nhu nay la co quyen`
        ]);
        Route::post('/add', [
            'as' => 'room.postAdd',
            'uses' => 'Admin\RoomController@postAdd',
            'middleware' => 'testLogin' // nhu nay la co quyen`
        ]);

        //edit
        Route::get('/edit/{id}', [
            'as' => 'room.getEdit',
            'uses' => 'Admin\RoomController@getEdit',
            'middleware' => 'testLogin' // nhu nay la co quyen`
        ]);
        Route::post('/edit/{id}', [
            'as' => 'room.postEdit',
            'uses' => 'Admin\RoomController@postEdit',
            'middleware' => 'testLogin' // nhu nay la co quyen`
        ]);

        //delete
        Route::get('/delete/{id}', [
            'as' => 'room.getDelete',
            'uses' => 'Admin\RoomController@getDelete',
            'middleware' => 'testLogin' // nhu nay la co quyen`
        ]);
    });

    //list,add,update,delete service
    Route::prefix('service')->group(function () {
        //  buoc 3 su dung
        Route::get('/list', [
            'as' => 'service.getList',
            'uses' => 'Admin\ServiceController@getList',
            // 'middleware' => 'testLogin' // nhu nay la co quyen`
        ]);

        //add
        Route::get('/add', [
            'as' => 'service.getAdd', //as la name
            'uses' => 'Admin\ServiceController@getAdd', // uses : Controllerxuli@ham xu li
            // 'middleware' => 'testLogin' //middleware
        ]);
        Route::post('/add', [
            'as' => 'service.postAdd',
            'uses' => 'Admin\ServiceController@postAdd',
            'middleware' => 'testLogin'
        ]);

        //update
        Route::get('/edit/{id}', [
            'as' => 'service.getEdit',
            'uses' => 'Admin\ServiceController@getEdit',
            'middleware' => 'testLogin'
        ]);
        Route::post('/edit/{id}', [
            'as' => 'service.postEdit',
            'uses' => 'Admin\ServiceController@postEdit',
            'middleware' => 'testLogin'
        ]);
        //delete
        Route::get('/delete/{id}', [
            'as' => 'service.getDelete',
            'uses' => 'Admin\ServiceController@getDelete',
            'middleware' => 'testLogin'
        ]);
    });

    //list,add,update,delete user
    Route::prefix('user')->group(function(){

        //list
        Route::get('/list', "Admin\UserController@getList")->name('user.getList');

        //add
        Route::get('/add', [
            'as' => 'user.getAdd',
            'uses' => 'Admin\UserController@getAdd',
            'middleware' => 'testLogin'
        ]);
        Route::post('/add', [
            'as' => 'user.postAdd',
            'uses' => 'Admin\UserController@postAdd',
            'middleware' => 'testLogin'
        ]);

        //update
        Route::get('/edit/{id}', [
            'as' => 'user.getEdit',
            'uses' => 'Admin\UserController@getEdit',
            'middleware' => 'testLogin'
        ]);
        Route::post('/edit/{id}', [
            'as' => 'user.postEdit',
            'uses' => 'Admin\UserController@postEdit',
            'middleware' => 'testLogin'
        ]);

        //delete
        Route::get('/delete/{id}', [
            'as' => 'user.getDelete',
            'uses' => 'Admin\UserController@getDelete',
            'middleware' => 'testLogin'
        ]);
    });
});
Route::get('/account/{id}', [
    'as' => 'user.getInfo',
    'uses' => 'Admin\UserController@getInfo',
    'middleware' => 'testLogin' // nhu nay la co quyen`
]);
