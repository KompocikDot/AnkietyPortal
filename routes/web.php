<?php

use App\Http\Controllers\Ankieta;
use App\Http\Controllers\Main;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;

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

Route::get('/', [Main::class, "ReturnMain"])->name('main');


Route::get('/ankiety', [Ankieta::class, "ReturnAnkieta"])->name('ankiety_get');
Route::post('/ankiety', [Ankieta::class, "AddAnkieta"])->name('ankiety_add');
Route::get('/ankieta/{id}', [Ankieta::class, "GetExactAnkieta"])->name('ankiety_one');


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', [Ankieta::class, "ReturnDashData"])->name('dashboard');
