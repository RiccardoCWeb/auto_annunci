<?php

use App\Http\Controllers\AnnunciController;
use App\Http\Controllers\AnnunciAdminController;
use App\Http\Controllers\UserAdminController;
use Illuminate\Support\Facades\Auth;
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
    return view('index');
})->name('index');


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

Route::get('/admin', function () {
    return view('admin.index');
})->middleware('auth')->middleware('admin')->name('adminroute');

Route::get('/notauth',function(){
    return view('notauth');
})->name('notauth');


//create
Route::get('annunci/create', [AnnunciController::class, 'create'])->name('annunci.create')->middleware('auth');
Route::post('annunci/store', [AnnunciController::class, 'store'])->name('annunci.store');
//read
Route::get('annunci', [AnnunciController::class, 'index'])->name('annunci.index')->middleware('auth');
Route::get('annunci/{id}', [AnnunciController::class, 'show'])->name('annunci.show');
//update
Route::get('annunci/{id}/edit', [AnnunciController::class, 'edit'])->name('annunci.edit');
Route::post('annunci/{id}/update', [AnnunciController::class, 'update'])->name('annunci.update');
//delete
Route::get('annunci/{id}/delete', [AnnunciController::class, 'destroy'])->name('annunci.delete')->middleware('auth');


Route::get('/admin/users', [UserAdminController::class, 'index'])->middleware('admin')->name('admin.users.index');
Route::get('/admin/annunci', [AnnunciAdminController::class, 'index'])->middleware('admin')->name('admin.annunci.index');

require __DIR__.'/auth.php';

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

