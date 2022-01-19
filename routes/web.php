<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PagesController;
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

Route::get('/', [PagesController::class, 'welcomePage']);
Route::get('/inventories', [PagesController::class, 'loadInventoryPage'])->name('inventories');
Route::get('/CreateInventory', [PagesController::class, 'createInventoryPage'])->name('create');
Route::get('/edit_details/{id}', [PagesController::class, 'editInventoryDetails'])->name('edit');
Route::post('/create', [PagesController::class, 'createUser']);
Route::patch('/update/{id}', [PagesController::class, 'update'])->name('update');
Route::delete('/delete.delete/{id}', [PagesController::class, 'delete'])->name('delete.delete');
Route::get('/preDelete/{id}', [PagesController::class, 'preDelete'])->name('customer.delete');
Route::get('/trash', [PagesController::class, 'getTrashedRecords']);
Route::get('/restore/{id}', [PagesController::class, 'restoreTrashedRecords'])->name('customers.restore');
Route::delete('/delete/{id}', [PagesController::class, 'deleteTrash'])->name('delete.trash');