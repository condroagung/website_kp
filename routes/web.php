<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dashboard;

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

##FRONT END USER##
Route::view(
    '/',
    'home/index',
    [
        'title' => 'Karya Kencana | Home'
    ]
);

Route::view(
    '/contact',
    'home/contact',
    [
        'title' => 'Karya Kencana | Kontak Kami'
    ]
);

Route::view(
    '/profil',
    'home/profil',
    [
        'title' => 'Karya Kencana | Profil'
    ]
);

Route::view(
    '/portofolio',
    'home/portofolio',
    [
        'title' => 'Karya Kencana | Portofolio'
    ]
);

##BACK END##
Route::get('/dashboard', [Dashboard::class, 'index'])->name('dashboard');
Route::get('/dashboard/produk', [Dashboard::class, 'product'])->name('dashboard/produk');
Route::get('/dashboard/kategori', [Dashboard::class, 'category'])->name('dashboard/kategori');
Route::get('/dashboard/kategori/add', [Dashboard::class, 'add_category'])->name('dashboard/kategori/add');
Route::post('/dashboard/kategori/insert', [Dashboard::class, 'insert_category'])->name('dashboard/kategori/insert');
Route::get('/dashboard/kategori/edit/{id_kategori}', [Dashboard::class, 'edit_category']);
Route::post('/dashboard/kategori/update', [Dashboard::class, 'update_category'])->name('dashboard/kategori/update');
Route::get('/dashboard/kategori/delete/{id_kategori}', [Dashboard::class, 'delete_category']);
