<?php

use App\Http\Controllers\Form;
use App\Http\Controllers\Play;
use App\Http\Controllers\Whois;
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

Route::get('/', function () {
    return view('home');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


Route::get('/whois',[Whois::class,'show']);
Route::get('/check',[Whois::class,'check']);


Route::get('form',[Form::class,'index']);

Route::post('form',[Form::class,'view']);

Route::get('play',[Play::class,'index']);

require __DIR__.'/auth.php';
