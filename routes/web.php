<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\HorsesController;
use App\Http\Controllers\RidersController;
use App\Http\Controllers\StablesController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/admin', [HorsesController::class, 'index'])->name('admin.index');

Route::get('dashboard', [HomeController::class, 'dashboard'])->name('dashboard');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::post('stable/{id}', [HomeController::class, 'stable'])->name('stable');
Route::post('horse/{id}', [HomeController::class, 'horse'])->name('horse');
Route::post('rider/{id}', [HomeController::class, 'rider'])->name('rider');

Route::get('stable', [HomeController::class, 'stablelist'])->name('stablelist');
Route::get('horse', [HomeController::class, 'horselist'])->name('horselist');
Route::get('rider', [HomeController::class, 'riderlist'])->name('riderlist');

//Route::middleware(['auth', 'admin'])->group(function() {

    Route::get('horses', [HorsesController::class, 'index'])->name('horses');      
    
    Route::get('horses/add', [HorsesController::class, 'add'])->name('horses.add');      
    Route::post('horses/add/save', [HorsesController::class, 'save'])->name('horses.save');
    Route::get('horses/edit/{id}', [HorsesController::class, 'edit'])->name('horses.edit');
    Route::put('horses/update/{id}', [HorsesController::class, 'update'])->name('horses.update');
    Route::delete('horses/delete/{id}', [HorsesController::class, 'delete'])->name('horses.delete');

    Route::get('riders', [RidersController::class, 'index'])->name('riders');  

    Route::get('riders/add', [RidersController::class, 'add'])->name('riders.add');      
    Route::post('riders/add/save', [RidersController::class, 'save'])->name('riders.save');
    Route::get('riders/edit/{id}', [RidersController::class, 'edit'])->name('riders.edit');
    Route::put('riders/update/{id}', [RidersController::class, 'update'])->name('riders.update');
    Route::delete('riders/delete/{id}', [RidersController::class, 'delete'])->name('riders.delete');

    Route::get('stables', [StablesController::class, 'index'])->name('stables');  

    Route::get('stables/add', [StablesController::class, 'add'])->name('stables.add');      
    Route::post('stables/add/save', [StablesController::class, 'save'])->name('stables.save');
    Route::get('stables/edit/{id}', [StablesController::class, 'edit'])->name('stables.edit');
    Route::put('stables/update/{id}', [StablesController::class, 'update'])->name('stables.update');
    Route::delete('stables/delete/{id}', [StablesController::class, 'delete'])->name('stables.delete');
    Route::get('search', [App\Http\Controllers\HomeController::class, 'search'])->name('search');
//});

  
    
   

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
