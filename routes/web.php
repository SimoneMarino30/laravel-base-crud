<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\RecordController;

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

Route::get('/', [PageController::class, 'index'])->name('homepage');

Route::resource('records', RecordController::class);

// ! Rotte contenute in Route::resource(controller Record) :

// * Rotta per la lista index
// Route::get('/records', [PageController::class, 'index'])->name('records.index');

// * Rotta per la dettaglio risorsa show
// Route::get('/records/{record}', [RecordController::class, 'show'])->name('records.show');

// * Rotta per il form creazione risorsa
// Route::get('/records/create', [RecordController::class, 'create'])->name('records.create');