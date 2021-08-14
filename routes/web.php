<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dashboard;
use App\Http\Controllers\Home;
use App\Http\Controllers\Auth;

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
Route::get('/produk', [Home::class, 'index'])->name('produk');
Route::get('/berita', [Home::class, 'home_berita'])->name('berita');
#Route::post('/produk/search', [Home::class, 'search_produk'])->name('produk/search');

##BACK END##
Route::get('/dashboard', [Dashboard::class, 'index'])->name('dashboard');
#Produk
Route::get('/dashboard/produk', [Dashboard::class, 'product'])->name('dashboard/produk');
Route::get('/dashboard/produk/add', [Dashboard::class, 'add_product'])->name('dashboard/produk/add');
Route::post('/dashboard/produk/insert', [Dashboard::class, 'insert_product'])->name('dashboard/produk/insert');
Route::get('/dashboard/produk/edit/{id_product}', [Dashboard::class, 'edit_product']);
Route::post('/dashboard/produk/update', [Dashboard::class, 'update_product'])->name('dashboard/produk/update');
Route::get('/dashboard/produk/delete/{id_product}', [Dashboard::class, 'delete_product']);
#Kategori
Route::get('/dashboard/kategori', [Dashboard::class, 'category'])->name('dashboard/kategori');
Route::get('/dashboard/kategori/add', [Dashboard::class, 'add_category'])->name('dashboard/kategori/add');
Route::post('/dashboard/kategori/insert', [Dashboard::class, 'insert_category'])->name('dashboard/kategori/insert');
Route::get('/dashboard/kategori/edit/{id_kategori}', [Dashboard::class, 'edit_category']);
Route::post('/dashboard/kategori/update', [Dashboard::class, 'update_category'])->name('dashboard/kategori/update');
Route::get('/dashboard/kategori/delete/{id_kategori}', [Dashboard::class, 'delete_category']);
#Berita
Route::get('/dashboard/berita', [Dashboard::class, 'berita'])->name('dashboard/berita');
Route::get('/dashboard/berita/add', [Dashboard::class, 'add_berita'])->name('dashboard/berita/add');
Route::post('/dashboard/berita/insert', [Dashboard::class, 'insert_berita'])->name('dashboard/berita/insert');
Route::get('/dashboard/berita/edit/{id_berita}', [Dashboard::class, 'edit_berita']);
Route::post('/dashboard/berita/update', [Dashboard::class, 'update_berita'])->name('dashboard/berita/update');
Route::get('/dashboard/berita/delete/{id_berita}', [Dashboard::class, 'delete_berita']);


#Auth
Route::get('/login', [Auth::class, 'index'])->name('login');
Route::post('/auth', [Auth::class, 'auth'])->name('auth');
Route::get('/logout', [Auth::class, 'logout'])->name('logout');
