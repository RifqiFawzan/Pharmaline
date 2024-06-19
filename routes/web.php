<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('obat', function () {
    return view('obat');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/signup', function () {
    return view('signup');
});

Route::get('/keranjangkosong', function () {
    return view('keranjang_kosong');
});

Route::get('/keranjang', function () {
    return view('keranjang');
});

Route::get('/pembayaran', function () {
    return view('pembayaran');
});

Route::get('/status', function () {
    return view('status');
});

Route::get('/akun', function () {
    return view('akun');
});

Route::get('produklaris', function () {
    return view('produklaris');
});

Route::get('konsultasi', function () {
    return view('konsultasi');
});

Route::get('produk1', function () {
    return view('produk1');
});

Route::get('produk2', function () {
    return view('produk2');
});

Route::get('produk6', function () {
    return view('produk6');
});

Route::get('tautan1', function () {
    return view('tautan1');
});

Route::get('tautan2', function () {
    return view('tautan2');
});

Route::get('keranjang_kosong', function () {
    return view('keranjang_kosong');
});

Route::get('keranjang', function () {
    return view('keranjang');
});

Route::get('metode_pembayaran', function () {
    return view('metode_pembayaran');
});

Route::get('buktibayar', function () {
    return view('buktibayar');
});
