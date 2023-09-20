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

Route::get('Hello', function () {
    return "Hello World";
});

Route::get(`/mahasiswa/{cinta}` , function ($cintaa) {
    return "Tampilkan data mahasiswa bernama $cintaa";
});

Route::get('/siswa', function(){
    $array_nama = ["Risa", "Rudi","Bambang"];
return view ('universitas.mahasiswa')->with('siswa', $array_nama);
});
