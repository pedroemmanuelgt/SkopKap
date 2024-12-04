<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\CommentController;
use App\Models\User;





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

Route::get('/about', function () {
    return view('conocenos');
})->name('about');


Auth::routes();
Route::middleware(['auth'])->group(function () {
    
    Route::get('/home', [App\Http\Controllers\AdminController::class, 'index'])->name('home');

    Route::get('/dashboard', [AdminController::class, 'index'])->name('dashboard');
    Route::get('/users', [AdminController::class, 'users'])->name('users');
    
    Route::resource('/comments', CommentController::class);

    // Route::get('/offline', function(){
    //     return view('offline');
    // });

    Route::view('/offline', 'offline')->name('offline');
});