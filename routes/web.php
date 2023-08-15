<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
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

Route::get('auto_login', [HomeController::class, 'auto_login'])->name('auto_login');

Route::get('/about', function () {
    return view('about');
});
Route::get('contact', function () {
    return view('contact');
});
Route::get('faqs', function () {
    return view('faqs');
});
Route::get('feature', function () {
    return view('feature');
});
Route::get('home', function () {
    return view('home');
});

Route::get('services', function () {
    return view('services');
});

Auth::routes();
Route::middleware(['auth'])->group(function () {
    Route::get('pricing', function () {
        return view('pricing');
    })->name('pricing');
});

Route::get('admin/dashboard', [AdminController::class, 'index'])->name('dashboard');
