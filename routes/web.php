<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\admin\graficos\GraficosController;
use App\Http\Controllers\admin\reportes\ReportesController;
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
Route::get('/admin/add/workers', [AdminController::class, 'addWorkers'])->name('admin.add.workers');
Route::post('/admin/new/workers', [AdminController::class, 'newWorkers'])->name('admin.new.workers');
Route::get('/admin/add/patients', [AdminController::class, 'addPatients'])->name('admin.add.patients');
Route::post('/admin/new/patients', [AdminController::class, 'newPatients'])->name('admin.new.patients');

Route::get('/cita/new',[CitasController::class,'newCita'])->name('newCita');
Route::get('/cita/list/doctor',[CitasController::class,'fetchName'])->name('fetch.names');
Route::get('/cita/list/fecha',[CitasController::class,'addFecha'])->name('add.names');
Route::get('/cita/list/hora',[CitasController::class,'fetchHorario'])->name('fetch.schedules');
Route::post('/cita/add', [CitasController::class, 'addCita'])->name('cita.add');
Route::get('/cita/mod',[CitasController::class,'modCita'])->name('modCita');
Route::get('/cita/del',[CitasController::class,'delCita'])->name('delCita');
Route::get('/cita/show',[CitasController::class,'showCita'])->name('showCita');

Route::put('/paciente/edit',[PacienteController::class,'edit'])->name('paciente.edit');

Route::get('/admin/plot/cita/especialidad', [GraficosController::class, 'citaEspecialidad'])->name('plot.cita.especialidad');
Route::get('/admin/plot/paciente/asistencia', [GraficosController::class, 'pacienteAsistencia'])->name('plot.paciente.asistencia');
Route::get('/admin/plot/cita/dia', [GraficosController::class, 'citaDia'])->name('plot.cita.dia');
Route::get('/admin/plot/inventario/consultorio', [GraficosController::class, 'inventarioConsultorio'])->name('plot.inventario.consultorio');
Route::get('/admin/plot/paciente/ciudad', [GraficosController::class, 'pacienteCiudad'])->name('plot.paciente.ciudad');
Route::get('/admin/plot/paciente/estado', [GraficosController::class, 'pacienteEstado'])->name('plot.paciente.estado');

Route::get('/admin/pdf/cita/especialidad', [ReportesController::class, 'citaEspecialidad']);
Route::get('/admin/pdf/paciente/asistencia', [ReportesController::class, 'pacienteAsistencia']);
Route::get('/admin/pdf/cita/dia', [ReportesController::class, 'citaDia']);
Route::get('/admin/pdf/inventario/consultorio', [ReportesController::class, 'inventarioConsultorio']);
Route::get('/admin/pdf/paciente/ciudad', [ReportesController::class, 'pacienteCiudad']);

