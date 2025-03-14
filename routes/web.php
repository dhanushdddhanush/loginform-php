<?php

use Illuminate\Support\Facades\Route;

/* php artisan make:middleware AuthMiddleware

|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
use App\Http\Controllers\LoginController;
Route::get('/', function () {
    return view('home');
})->name('home');
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);

Route::middleware(['auth.custom'])->group(function () {
    Route::get('/success', function () {
        return view('success');
    })->name('success');

    Route::get('/fail', function () {
        return view('fail');
    })->name('fail');

    Route::get('/update-profile', function () {
        return view('update-profile');
    })->name('updateProfileForm');
    
    Route::post('/update-profile', [LoginController::class, 'updateProfile'])->name('updateProfile');
    
});

Route::get('/logout', function () {
    session()->flush();
    return redirect('/')->with('message', 'Logged out successfully.');
})->name('logout');
