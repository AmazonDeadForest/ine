<?php

use App\Http\Controllers\ActividadController;
use App\Http\Livewire\FuncionariosTable;
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

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:sanctum', 'verified'])
->get('/principal', function () {
    return view('principal');
})->name('principal');

Route::middleware(['auth:sanctum', 'verified'])
->get('/funcionarios', FuncionariosTable::class)
->name('funcionarios');

Route::middleware(['auth:sanctum', 'verified'])->get('/actividades', function () {
    return view('actividades');
})->name('actividades');

Route::post('/actividades', 'ActividadController@importExcel')->name('importActividades');