<?php

use App\Http\Controllers\AdminDashboardController;
use App\Http\Controllers\Form;
use App\Http\Controllers\Play;
use App\Http\Controllers\Whois;
use App\Http\Controllers\VideoViewController;
use App\Http\Controllers\ProfileController;
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
// public


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


Route::get('/', [VideoViewController::class, 'videoview'])->name('home');

Route::middleware(['auth'])->group(function () {
    Route::get('/admin/dashboard', [AdminDashboardController::class, 'index']);
    
    Route::get('/admin/dashboard/users', [AdminDashboardController::class, 'users'])->name('users');

    Route::get('/admin/dashboard/videos', [AdminDashboardController::class, 'videos']);

    Route::get('/admin/dashboard/videos/play/{id}', [AdminDashboardController::class, 'play']);
    
    Route::get('/admin/dashboard/users/edit/{id}', [AdminDashboardController::class, 'edit']);

    Route::put('/admin/dashboard/users/update/{id}', [AdminDashboardController::class, 'update']);

    Route::get('/admin/dashboard/users/del/{id}', [AdminDashboardController::class, 'remove']);
    
    Route::get('profile', [ProfileController::class, 'index'])->name('profile');

    Route::put('/profile/{id}', [ProfileController::class, 'update'])->name('update_profile');


    Route::get('form', [Form::class, 'index'])->name('form')->middleware('auth');

    Route::post('form', [Form::class, 'view']);

    Route::get('play/{id}', [Play::class, 'index'])->name('play');
});


Route::get('/whois', [Whois::class, 'show']);
Route::get('/check', [Whois::class, 'check']);

require __DIR__ . '/auth.php';
