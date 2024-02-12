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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('halo', function () {
    return 'Halo, Asmine kulo Raden!';
});

Route::get("haloblog", function () {
    return view("blog");
});
Route::get('biodata', function () {
    return "Nama : Raden<br>
    Tempat lahir : Tegal<br>
    Tanggal Lahir : 24 Februari 2005<br>
    Alamat : Jl. Kemayoran timur no 150<br>
    No HP 0987654321";
});
Route::get("produk", function () {
    return "Produk 1  : Kecap<br>
            merk      : ABC<br>
            Stok : 30 Pcs<br>
            Harga Satuan : Rp. 10.000,-<br><br><br>
            Produk 2 : Saos<br>
            Merk : ABC<br>
            Stok : 25 Pcs<br>
            Harga Satuan : Rp. 8.000,-<br><br><br>
            Produk 3 : Sarden<br>
            Merk : ABC<br>
            Stok : 50 Pcs<br>
            Harga Satuan : Rp. 21.000,-";
});
Route::get("kontak", function () {
    return "Website : Asep.com<br>
            Youtube : asep rpl tamsis<br>
            Instagram : @asep_rpltamsis<br>
            Email : asep@gmail.com<br>
            No HP 0987654321";
});
Route::get('home', function () {
    return view('home');
});
Route::get('profil', function () {
    return view('profil');
});
