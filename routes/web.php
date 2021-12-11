<?php
 
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
 
Route::get('/', function () {
    return view('welcome');
});
 
Auth::routes();
 
Route::middleware(['auth'])->group(function () {
 
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
 
    Route::middleware(['admin'])->group(function () {
    
       Route::resource('admin', AdminController::class);
       Route::get('admin/{id}/print', [AdminController::class, 'print']);

        
    });
 
    Route::middleware(['user'])->group(function () {
        Route::get('user', [UserController::class, 'index']);
        Route::get('user/{id}', [UserController::class, 'show']);

        Route::get('user/{id}/print', [UserController::class, 'print']);
    });
 
    Route::get('/logout', function() {
        Auth::logout();
        redirect('/');
    });
 
});