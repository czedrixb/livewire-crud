<?php

use App\Livewire\Auth\Login;
use App\Livewire\User\UserIndex;
use App\Livewire\User\UserShow;
use App\Livewire\User\UserCreate;
use App\Livewire\User\UserEdit;
use Illuminate\Support\Facades\Route;

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

Route::get('/', Login::class);

Route::middleware('auth')->group(function () {
    Route::get('/users', UserIndex::class);
    Route::get('/users/{id}/show', UserShow::class);
    Route::get('/users/create', UserCreate::class);
    Route::get('/users/{id}/edit', UserEdit::class);
});
