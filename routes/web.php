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

Route::get('get_declared_classes', function () {
    dd(get_declared_classes());
});

Route::get('opcache_get_status', function () {
    dd(opcache_get_status());
});

Route::get('dir', function () {
    dd(__DIR__);
});
