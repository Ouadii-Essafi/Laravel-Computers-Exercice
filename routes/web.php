<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StaticController;
use App\Http\Controllers\ComputerController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return route('computers.index');
// });
Route::get('/', [ComputerController::class, 'index']);

Route::get('/computers', [StaticController::class, 'Home'])->name('home');
Route::get('/create_computer', [StaticController::class, 'Create_Computer'])->name('create_computer');
Route::get('/contact', [StaticController::class, 'contact'])->name('contact');
Route::get('/about', [StaticController::class, 'about'])->name('about');


Route::resource('computers', ComputerController::class);
Route::get('/delete_computers/{id}', [ComputerController::class, 'delete'])->name('computers.delete');
Route::get('/computers_modifier/{id}', [StaticController::class, 'modifier'])->name('computers.modifier');
Route::get('/computers_update/{id}', [ComputerController::class, 'updateComputer'])->name('update');