<?php

use App\Http\Livewire\Admin\Categories\Categories;
use App\Http\Livewire\Admin\Locations\Locations;
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

Route::get('/admin/categories', Categories::class)->middleware(['auth'])->name('categories');
Route::get('/admin/locations', Locations::class)->middleware(['auth'])->name('locations');

require __DIR__.'/auth.php';
