<?php

use App\Http\Controllers\Ankieta;
use App\Http\Controllers\Main;
use App\Http\Controllers\Stats;
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


Route::post('/ankiety', [Ankieta::class, "AddAnkieta"])->name('ankiety_add');
Route::post('/ankiety/add', [Ankieta::class, "AddAnkietaAnswer"])->name('add_answer');
Route::get('/ankiety', [Ankieta::class, "ReturnAnkieta"])->name('ankiety_get');
Route::get('/ankieta/{id}', [Ankieta::class, "GetExactAnkieta"])->name('ankiety_one');
Route::get('/ankiety/delete/{id}', [Ankieta::class, "RemoveAnkieta"])->name('remove_ankieta');

Route::get('/stats', [Stats::class, "ReturnAllStatsPage"])->name('all_stats');
Route::get('/stats/{id}', [Stats::class, "ReturnStatsPage"])->name('single_stats');

Route::get('/answers', [Ankieta::class, "ReturnUserAnkieta"])->name('answers');
Route::get('/answers/{id}', [Ankieta::class, "ReturnSingleUserAnkieta"])->name('single_answer');

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', [Ankieta::class, "ReturnDashData"])->name('dashboard');
