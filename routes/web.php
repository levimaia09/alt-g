<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\gameController;

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


Route::get('/', [gameController::class, 'index']);
Route::get('/shop', [gameController::class, 'shop']);
Route::get('/edit_account', [gameController::class, 'edit_account']);
Route::get('/dashboard_page', [gameController::class, 'admin'])->middleware(['auth']);
// Route::get('/shop/login', [gameController::class, 'login']);
// Route::get('/shop/register', [gameController::class, 'register']);

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

