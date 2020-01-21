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

Route::get('/', function () {
    return view('welcome');
});

Route::get('halo', function(){
    return 'Halo Ini Aplikasi Laravel Pertama Saya' .
            '<br>Laravel is Magical Framework';
});

Route::get('about', function(){
    return '<h1>Halo</h1>' .
            '<br>Selamat Datang di WebApp saya<br>'. 
            'Laravel, Mancap!!';
});

Route::get('about/profil/nama', function(){
    return 'Hallo Saya Alfi';
});

Route::get('about/profil/kelas', function(){
    return 'Kelas : XI RPL 1';
});

Route::get('about/profil/agama', function(){
    return 'Agama : Islam';
});

Route::get('about/profil/hobi', function(){
    return 'Hobi saya Bermain Bola';
});

Route::get('about/profil/alamat', function(){
    return 'Saya Tinggal di jln Sukamenak';
});

//Route Parameter
// Route::get('about/biodata/{nama}', function($a){
//     return 'Halo ini biodata ' . $a;
// });

Route::get('about/biodata/{nama}/{alamat}/{sekolah}/{umur}', function($a,$b,$c,$d){
    return 'Halo ini biodata ' . $a .
            '<br>' . $a . ' ber-alamat di '. $b.
            '<br>Sekolah di ' . $c . 
            ' dan Ber-umur ' . $d . ' Tahun';
});
