<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CitasController;
use App\Http\Controllers\PacienteController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
})->name('welcome');

Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/dashboard', [App\Http\Controllers\HomeController::class, 'index']);

Route::get('/admin', [AdminController::class, 'index']);
Route::get('/admin/settings', [AdminController::class, 'settings'])->name('admin.settings');
Route::get('/admin/password', [AdminController::class,'password'])->name('admin.password');
Route::post('/admin/password/update', [AdminController::class,'passwordUpdate'])->name('admin.password.update');

Route::get('/admin/list/users',[AdminController::class,'listUsers'])->name('admin.list.users');
Route::get('/admin/add/admins',[AdminController::class,'addAdmins'])->name('admin.add.admins');
Route::get('/admin/add/workers', [AdminController::class, 'addWorkers'])->name('admin.add.workers');
Route::get('/admin/add/patients', [AdminController::class, 'addPatients'])->name('admin.add.patients');

Route::get('/cita/new',[CitasController::class,'newCita'])->name('newCita');
Route::get('/cita/mod',[CitasController::class,'modCita'])->name('modCita');
Route::get('/cita/del',[CitasController::class,'delCita'])->name('delCita');
Route::get('/cita/show',[CitasController::class,'showCita'])->name('showCita');

Route::put('/paciente/edit',[PacienteController::class,'edit'])->name('paciente.edit');

