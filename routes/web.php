<?php

use App\Http\Controllers\ProductController;


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
    return view('home');
});


Route::group(['middleware' => 'prevent-back-history'],function(){
	Auth::routes();
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    Route::get('/change-password', [App\Http\Controllers\HomeController::class, 'changePassword'])->name('change-password');
    Route::post('/update-password', [App\Http\Controllers\HomeController::class, 'updatePassword'])->name('update-password');

    Route::resource('horario', App\Http\Controllers\HorarioController::class);
    Route::resource('asistencia', App\Http\Controllers\AsistenciaController::class);
    
    Route::resource('cargo', App\Http\Controllers\CargoController::class);
    Route::resource('empleado', App\Http\Controllers\EmpleadoController::class);

});

Route::get('/asistencia/marcarasistencia', function () {
    return view('/asistencia/marcarasistencia');
});