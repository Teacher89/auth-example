<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AuthController;


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

Route::get('/', function () { return redirect()->route('signin'); });
// Route::get('/', function () { return view('welcome'); });

Route::get('/auth/signin', [AuthController::class, 'signin'])->name('signin');
Route::post('/auth/signin', [AuthController::class, 'auth']);

Route::get('/auth/signup', [AuthController::class, 'signup'])->name('signup');
Route::post('/auth/signup', [AuthController::class, 'create']);

Route::get('/auth/status', [AuthController::class, 'status'])->name('status');

Route::get('/auth/signout', [AuthController::class, 'signout'])->name('signout');
