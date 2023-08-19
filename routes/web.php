<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Auth;
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
})->name('about');
Route::get('contact', function () {
    return view('contact');
})->name('contact');
Route::get('faqs', function () {
    return view('faqs');
})->name('faqs');
Route::get('feature', function () {
    return view('feature');
})->name('feature');
Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('services', function () {
    return view('services');
})->name('services');

Auth::routes();
Route::middleware(['auth'])->group(function () {
    Route::get('pricing', function () {
        if (auth()->user()->role == 'admin') {
            return redirect()->route('dashboard');
        }
        return view('pricing');
    })->name('pricing');

    Route::get('admin/dashboard', [AdminController::class, 'index'])->name('dashboard');
    Route::get('admin/show_users', [AdminController::class, 'show_users'])->name('show_users');
    Route::get('admin/get_users', [AdminController::class, 'get_data'])->name('get_users');

    Route::get('/get_count', [AdminController::class, 'get_count'])->name('get_count');
    Route::get('/get_count_graph/{type?}/{table?}', [AdminController::class, 'get_count_graph'])->name('get_count_graph');
    Route::get('/get_percentage/{type?}/{table?}', [AdminController::class, 'get_percentage'])->name('get_percentage');
});



// three routes
