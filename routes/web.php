<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;


route::get('/',[LoginController::class,'registrasi'])->name('registrasi');
route::post('/simpanregistrasi',[LoginController::class,'simpanregistrasi'])->name('simpanregistrasi');
route::get('/login',[LoginController::class,'halamanlogin'])->name('login');
route::post('/postlogin',[LoginController::class,'postlogin'])->name('postlogin');
route::get('/logout',[LoginController::class,'logout'])->name('logout');

Route::get('/home', function(){return view('view_home');});

//Route untuk Data Buku
Route::get('/buku', 'BukuController@bukutampil');
Route::post('/buku/tambah','BukuController@bukutambah');
Route::get('/buku/hapus/{id_buku}','BukuController@bukuhapus');
Route::put('/buku/edit/{id_buku}', 'BukuController@bukuedit');


//Route untuk Data Prodi
Route::get('/prodi', 'ProdiController@proditampil');
Route::post('/prodi/tambah', 'ProdiController@proditambah');
Route::get('/prodi/hapus/{id}', 'ProdiController@prodihapus');
Route::put('/prodi/edit/{id}', 'ProdiController@prodiedit');

//Route untuk Data Anggota
Route::get('/anggota', 'AnggotaController@anggotatampil');
Route::post('/anggota/tambah', 'AnggotaController@anggotatambah');
Route::get('/anggota/hapus/{id_anggota}', 'AnggotaController@anggotahapus');
Route::put('/anggota/edit/{id_anggota}', 'AnggotaController@anggotaedit');

//Route untuk Data Petugas
Route::get('/petugas', 'PetugasController@petugastampil');
Route::post('/petugas/tambah', 'PetugasController@petugastambah');
Route::get('/petugas/hapus/{id_petugas}', 'PetugasController@petugashapus');
Route::put('/petugas/edit/{id_petugas}', 'PetugasController@petugasedit');

//Route untuk Data Peminjaman
Route::get('/pinjam', 'PinjamController@pinjamtampil');
Route::post('/pinjam/tambah','PinjamController@pinjamtambah');
Route::get('/pinjam/hapus/{id_pinjam}','PinjamController@pinjamhapus');
Route::put('/pinjam/edit/{id_pinjam}', 'PinjamController@pinjamedit');

//Route untuk Data Pengembalian
Route::get('/kembali', 'KembaliController@kembalitampil');
Route::get('/kembali/hapus/{id_kembali}','KembaliController@kembalihapus');

