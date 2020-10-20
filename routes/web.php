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

//use Illuminate\Support\Facades\Route;
//
Route::get('/', function () {
    return view('welcome');
})->name("welcome");
//
//
//Route::get('/test/{id}/{name}',"Front\UserController@test");
//
//
//Route::get('/test2/{id?}', function ($id) {
//    return view("test");
//});
//
//
//Route::namespace("Front")->group(function () {
//    Route::get("users/{id}/{name}", "UserController@test");
//});
//
//
//Route::get("/login", function () {
//    return "login";
//})->name("login");
//
//
//Route::get("first/test", "Frist\FirstController@test")->middleware("auth");
//
//
//Route::resource("news", "News\NewsController");
//
//
//Route::get("landing", function (){
//    return view("landing\c");
//});
//
//Auth::routes();
//
//Route::get('/home', 'HomeController@index')->name('home');

//Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');

Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home') -> middleware('verified');

