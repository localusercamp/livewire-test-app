<?php

use App\Livewire\Pages\Dashboard;
use App\Livewire\Pages\Profile;
use App\Livewire\Pages\Tasks;
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

Route::get('/',        Dashboard::class);
Route::get('/profile', Profile::class);
Route::get('/tasks',   Tasks::class);
