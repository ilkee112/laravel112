<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Pgcontroller;

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

Route::get('/hello', function () {
    return view('hello');
});

Route::get('/hello', function () {
    return view('hello', ['name' => 'Ilzeeeeeeeeeettttttpoopopopjkjkjlllllkjkjt']);
});

Route::get('/post', 'UserController@index')->name('users.index');

Route::get('/post', [Pgcontroller::class, 'index']);
