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

Route::get('name/{param?}', function($a = "Alfi"){
    return 'Your Name is ' . $a;
}); 

Route::get('pesan/{makan?}/{minum?}/{harga?}', function($a = null, $b = null, $c = null){
    if(!$a && !$b){
        return 'Silahkan Pesan Dahulu';
    }
    if(isset($a)){
        echo 'Anda Pesan ' . $a;
    }
    if(isset($b)){
        echo ' dan ' . $b;
    }
    if(isset($c)){
        if($c >= 35000){
            $size = "Large";
        }
        elseif($c >= 25000){
            $size = "Medium";
        }
        elseif($c >= 0){
            $size = "Small";
        }
        else{
            return " Harga Tidak Valid";
        }
        echo ' dan mendapatkan size ' . $size.' dengan harga '.$c;
    }
}); 

Route::get('tni/{nama?}/{bb?}/{umur?}', function($a = null, $b = null, $c = null){
    if(!$a && !$b){
        return 'Silahkan Isi Data Terlebih Dahulu';
    }
    if(isset($a)){
        echo 'Nama Anda ' . $a;
    }
    if(isset($b)){
        if($b >= 76 && $b <=100){
            $bb = "Anda Harus turun berat badan!";
        }
        elseif($b >= 65 && $b < 76){
            $bb = "Berat badan anda ideal!";
        }
        elseif($b >= 50 && $b < 65){
            $bb = "Naikan berat badan anda!";
        }
        elseif($b < 50){
            $bb = "Anda Kurang Nutrisi";
        }
        else{
            $bb = "Berat badan tidak valid";
        }
        echo ' '. $bb;
    }
    if(isset($c)){
        if($c >= 50 && $c <=60){
            $pangkat = "Jendral";
        }
        elseif($c >= 40 && $c < 50){
            $pangkat = "Laksamana";
        }
        elseif($c >= 30 && $c < 40){
            $pangkat = "Perwira";
        }
        else{
            $pangkat = "umur tidak valid";
        }
        echo ' ' .$pangkat;
    }
}); 

//akses model post
Route::get('testmodel', function(){
    $query = App\Post::all();
    return $query;
});

Route::get('testmodelsiswa', function(){
    $query = App\Student::all();
    return $query;
});

Route::get('testmodel/id', function(){
    $query = App\Post::find(1);
    return $query;
});

Route::get('testmodel/title', function(){
    $query = App\Post::where('title','like','%cepat nikah%')->get();
    return $query;
});

Route::get('testmodel/ubah', function(){
    $post = App\Post::find(1);
    $post->title = "Ciri Keluarga Sakinah";
    $post->save();
    return $post;
});

Route::get('testmodel/hapus', function(){
    $post = App\Post::find(1);
    $post->delete();
});

Route::get('testmodel/tambah', function(){
    $post = new App\Post;
    $post->title = "7 Amalan Pembuka Jodoh";
    $post->content = "shalat malam, sedekah, puasa sunah, silaturahmi, senyum, doa, tobat";
    $post->save();
    return $post;
});

Route::get('data-barang/ambil', function(){
    $query = App\Barang::all()->take(3);
    return $query;
});

Route::get('data-barang/select', function(){
    $query = App\Barang::select('nama_barang', 'kode_barang', 'jumlah_barang')->first();//take(3)->get()
    return $query;
});

Route::get('data-barang/tambah/{nama_barang}/{kode_barang}/{jumlah_barang}/{harga_barang}/{jenis_barang}/{merk_barang}/{deskripsi_barang}', 
    function($nama_barang, $kode_barang, $jumlah_barang, $harga_barang, $jenis_barang, $merk_barang, $deskripsi_barang){
    $post = new App\Barang;
    $post->nama_barang = $nama_barang;
    $post->kode_barang = $kode_barang;
    $post->jumlah_barang = $jumlah_barang;
    $post->harga_barang = $harga_barang;
    $post->jenis_barang = $jenis_barang;
    $post->merk_barang = $merk_barang;
    $post->deskripsi_barang = $deskripsi_barang;
    $post->save();
    return $post;
});

Route::get('halo', 'LatihanController@halo');
Route::get('tambah/{a?}/{b?}', 'LatihanController@pertambahan');
Route::get('kurang/{a?}/{b?}', 'LatihanController@pengurangan');
Route::get('kali/{a?}/{b?}', 'LatihanController@perkalian');
Route::get('bagi/{a?}/{b?}', 'LatihanController@pembagian');
Route::get('data-1', 'LatihanController@loop');
Route::get('data-2', 'LatihanController@loop2');

