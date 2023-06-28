<?php

use App\Http\Controllers\Kadai1_1Controller;
use App\Http\Controllers\Kadai02_1Controller;
use App\Http\Controllers\Kadai02_2Controller;
use App\Http\Controllers\Kadai02_3Controller;
use App\Http\Controllers\Kadai03_1Controller;
use App\Http\Controllers\Sample04Controller;
use App\Http\Controllers\Kadai04_1Controller;
use App\Http\Controllers\Sample05Controller;
use App\Http\Controllers\kadai05Controller;
use App\Http\Controllers\kadai06_1Controller;
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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

// Kadai1_1
Route::get('kadai01_1' , [Kadai1_1Controller::class, 'index']);

// Kadai2_1
Route::get('kadai02_1' , [Kadai02_1Controller::class, 'index']);

// kadai02_2
Route::get('kadai02_2' , [Kadai02_2Controller::class, 'index']);

// kadai02_3
Route::get('kadai02_3' , [Kadai02_3Controller::class, 'index']);

// kadai03_1
Route::get('kadai03_1' , [Kadai03_1Controller::class, 'index']);

//sample04
Route::get('sample04' , [Sample04Controller::class, 'index']);
Route::post('sample04' , [Sample04Controller::class, 'post']);

//kadai04_1
Route::get('kadai04_1', [Kadai04_1Controller::class, 'index']);
Route::post('kadai04_1', [Kadai04_1Controller::class, 'post']);

//sample05_1
Route::get('sample05_1', [Sample05Controller::class, 'index'])->name('sample05_1');
Route::post('sample05_1', [Sample05Controller::class, 'post']);

//kadai05_1
Route::get('kadai05_1', [kadai05Controller::class, 'index'])->name('kadai05_1');
Route::post('kadai05_1', [kadai05Controller::class, 'post']);

//kadai06_1
Route::resource( 'kadai06_1', kadai06_1Controller::class );




