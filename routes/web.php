<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeC;
use App\Http\Controllers\DashboardC;
use App\Http\Controllers\PesertaC;


Route::get('/', function () {
    return view('home');
});
Route::get('/home', [HomeC::class,'index']);

Route::get('/about', function () {
 return view('about');
});
Route::get('/contact', function () {
    return view('contact');
});
Route::get('/admin', function () {
    return view('admin');
});
Route::get('/admin2', function () {
    return view('layout.content');
});
Route::get('/dasboard1', function () {
    return view('adminlte.dasboard1');
});
Route::get('/info', function () {
    return view('adminlte.info');
});
Route::get('/adminlte', function () {
    return view('adminlte.blank');
});
// Route::get('/tambahdata', function () {
//     return view('pages.tambahdata');
// });
// Route::get('/editdata', function () {
//     return view('pages.editdata');
// });
Route::get('/dashboard', [DashboardC::class,'index']);
Route::get('/peserta', [PesertaC::class, 'index'])->name('peserta.index');
Route::get('/pesertacreate', [PesertaC::class, 'create'])->name('peserta.create');
Route::post('/pesertastore', [PesertaC::class, 'store'])->name('peserta.store');
Route::get('/peserta/{id}/edit', [PesertaC::class, 'edit'])->name('peserta.edit');
Route::put('/peserta/{id}/update', [PesertaC::class, 'update'])->name('peserta.update'); // Update route
Route::delete('/peserta/destroy{id}', [PesertaC::class, 'destroy'])->name('peserta.destroy');

;






