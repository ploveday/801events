<?php

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

Route::get('/', function () {
    return view('welcome');
});
// Route::get('event','listCtrl@show');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/organizers', 'listCtrl@show')->name('organizers');
Route::get('/allevent', 'listCtrl@allevent')->name('allevent');
Route::get('/creat-event', 'listCtrl@createvent');//use Post method
Route::get('/scan-ticket', 'listCtrl@scanticket');//use Post method
Route::get('/tickets', 'listCtrl@tickets');

