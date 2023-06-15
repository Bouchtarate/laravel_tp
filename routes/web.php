<?php

use App\Http\Controllers\EmployController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|

Route::get('/', function () {
    return view('welcome');
});
*/

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/',[EmployController::class,'index']);
Route::get('/create',[EmployController::class,'create'])->middleware('auth')->name('employs.create');
Route::post('/create',[EmployController::class,'store'])->name('employs.store');
Route::get('/edit',[EmployController::class,'edit'])->middleware('auth');
