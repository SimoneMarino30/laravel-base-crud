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

// ! Rotte contenute in Route::resource 
// TODO ( php artisan make:controller RecordController --resource ) :

// * Rotta per la lista index
// Route::get('/records', [PageController::class, 'index'])->name('records.index');

// * Rotta per il dettaglio risorsa show
// Route::get('/records/{record}', [RecordController::class, 'show'])->name('records.show');

// * Rotta per il form creazione risorsa
// Route::get('/records/create', [RecordController::class, 'create'])->name('records.create');

// * Rotta per il salvataggio form creazione risorsa
// Route::get('/records', [RecordController::class, 'store'])->name('records.store');

// * Rotta per il form di modifica risorsa
// Route::get('/records/{record}/edit', [RecordController::class, 'edit'])->name('records.edit');

// * Rotta per il form di modifica risorsa
// Route::put('/records/{record}/update', [RecordController::class, 'update'])->name('records.update');

// * Rotta per cancellazione risorsa singola
// Route::delete('/records/{record}/destroy', [RecordController::class, 'destroy'])->name('records.destroy');