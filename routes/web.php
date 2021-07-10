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

Route::view(
    '/index',
    'home/index',
    [
        'title' => 'Home',
        'content' => 'ini adalah page home'
    ]
);

Route::view(
    '/profile',
    'home/profile',
    [
        'title' => 'Profile',
        'content' => 'ini adalah page profile'
    ]
);

Route::view(
    '/template',
    'template',
    [
        'title' => 'template',
        'content' => 'ini adalah page profile'
    ]
);

Route::view(
    '/dashboard',
    'dashboard/template_dashboard',
    [
        'title' => 'Dashboard',
        'content' => 'ini adalah page profile'
    ]
);
