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
Route::get('/login', function () {
    return view('login', [
        "tittle => Login"
    ]);
});

Route::get('/dashboard-admin', function () {
    return view('dashboardAdmin', [
        "tittle" => "Dasboard Admin"
    ]);
});

Route::get('/', function () {
    return view('profil',[
        "tittle" => "Profil"
    ]);
});

Route::get('/profil', function () {
    return view('profil',[
        "tittle" => "Profil"
    ]);
});

Route::get('/manajemen-user', function () {
    return view('user',[
        "tittle" => "Manajemen User"
    ]);
});

Route::get('/manajemen-kelas', function () {
    return view('manajemenKelas',[
        "tittle" => "Manajemen Kelas"
    ]);
});

Route::get('/show-siswa', function () {
    return view('showsiswa',[
        "tittle" => "Daftar Siswa"
    ]);
});

Route::get('/manajemen-materi', function () {
    return view('manajemenMateri',[
        "tittle" => "Manajemen Materi"
    ]);
});

Route::get('/materi-pembelajaran', function () {
    return view('daftarMapel',[
        "tittle" => "Materi Pembelajaran"
    ]);
});

Route::get('/pengumpulan-tugas', function () {
    return view('tugas',[
        "tittle" => "Pengumpulan Tugas"
    ]);
});