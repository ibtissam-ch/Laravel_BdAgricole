<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Agriculteurs;
use App\Http\Livewire\Tarifs;
use App\Http\Livewire\Employes;
use App\Http\Livewire\Parcelles;
use App\Http\Livewire\Intervention;
use App\Http\Livewire\Livewire;
use App\Http\Livewire\Users;

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

//auth route for both
Route::group(['middleware' => ['auth']], function() {
    Route::get('/dashboard', 'App\Http\Controllers\DashboardController@index')->name('dashboard');
});

Route::group(['middleware' => ['auth', 'role:admin|editor|user']], function() {
    Route::get('/dashboard/agriculteurs', Agriculteurs::class)->name('agriculteurs');
    Route::get('/dashboard/tarifs', Tarifs::class)->name('tarifs');
    Route::get('/dashboard/employes', Employes::class)->name('employes');
    Route::get('/dashboard/parcelles', Parcelles::class)->name('parcelles');
    Route::get('/dashboard/interventions', Intervention::class)->name('interventions');

});
Route::group(['middleware' => ['auth', 'role:admin']], function() {
    Route::get('/dashboard/livewire', Livewire::class)->name('livewire');
    Route::get('/dashboard/users', Users::class)->name('users');

});

Route::view('users','livewire.home');

require __DIR__.'/auth.php';
