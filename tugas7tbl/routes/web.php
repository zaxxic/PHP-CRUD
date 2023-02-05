<?php

use App\Http\Controllers\ClubController;
use Illuminate\Support\Facades\Route;
use Laravel\Jetstream\Rules\Role;

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

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::get('clubs',[ClubController::class,'tes'])->name('club');
Route::post('save',[ClubController::class,'save'])->name('save');

Route::get('create',[ClubController::class,'create'])->name('create');

Route::get('del/{id}',[ClubController::class,'delete'])->name('delete');

Route::get('edit/{id}',[ClubController::class,'edit'])->name('edit');
Route::put('update',[ClubController::class,'update'])->name('update');
});

