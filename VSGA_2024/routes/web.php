<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return 'Selamat Datang';
});

Route::get('/hello', function () {
    return 'Hello VSGA';
});

Route::get('/world', function () {
    return 'Hello Dunia';
});

Route::get('/about', function () {
    return 'NIM : 2231750005';
});

Route::get('/kodebarang/{jenis?}/{merek?}', function ($jk='K01',$mrk='nokia') {
    return "kode barang $jk dan nama barang $mrk";
});

Route::get('/posts/{post}/{comment}', function ($post, $comment) {
    return 'Pos ke-' . $post . " Komentar ke-: " . $comment;
});

Route::get('/user/{name}', function ($name=null) {
    return 'Nama saya ' . $name;
});

Route::get('about', function () {
    return view('about');
})->name('about');

Route::get('tampil', function () {
    return view('tampil');
})->name('tampil');

Route::get('/pesandisini', function () {
    return '<h1> pesan disini </h1>';
});
Route::redirect('/contact-us', 'pesandisini');

Route::prefix('/polinema')->group(function(){
    Route::get('/dosen', function () {
        return '<h1> daftar nama dosen </h1>';
    });
    
    Route::get('/tendik', function () {
        return '<h1> daftar nama tendik </h1>';
    });
    
    Route::get('/jurusan', function () {
        return '<h1> daftar nama jurusan </h1>';
    });
});