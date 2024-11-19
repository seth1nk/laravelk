<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DispetController;
use App\Http\Controllers\VoditeliController;
use App\Http\Controllers\TovarController;
use App\Http\Controllers\GarageController;
use App\Http\Controllers\AvtoController;
use App\Http\Controllers\MarhController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\PostController;


Route::get('/dispet', [DispetController::class, 'index'])->name('dispet.index');
Route::get('/dispet/create', [DispetController::class, 'create'])->name('dispet.create');
Route::post('/dispet', [DispetController::class, 'store'])->name('dispet.store');
Route::get('/dispet/{id}/edit', [DispetController::class, 'edit'])->name('dispet.edit');
Route::put('/dispet/{id}', [DispetController::class, 'update'])->name('dispet.update');
Route::delete('/dispet/{id}', [DispetController::class, 'destroy'])->name('dispet.destroy');
Route::get('/dispet/{id_avto}/view', [DispetController::class, 'view'])->name('dispet.view');

Route::get('/garage', [GarageController::class, 'index'])->name('garage.index');
Route::get('/garage/create', [GarageController::class, 'create'])->name('garage.create');
Route::post('/garage', [GarageController::class, 'store'])->name('garage.store');
Route::get('/garage/{id}/edit', [GarageController::class, 'edit'])->name('garage.edit');
Route::put('/garage/{id}', [GarageController::class, 'update'])->name('garage.update');
Route::delete('/garage/{id}', [GarageController::class, 'destroy'])->name('garage.destroy');
Route::get('/garage/{id}/view', [GarageController::class, 'view'])->name('garage.view');

Route::get('/tovar', [TovarController::class, 'index'])->name('tovar.index');
Route::get('/tovar/create', [TovarController::class, 'create'])->name('tovar.create');
Route::post('/tovar', [TovarController::class, 'store'])->name('tovar.store');
Route::get('/tovar/{id}/edit', [TovarController::class, 'edit'])->name('tovar.edit');
Route::put('/tovar/{id}', [TovarController::class, 'update'])->name('tovar.update');
Route::delete('/tovar/{id}', [TovarController::class, 'destroy'])->name('tovar.destroy');
Route::get('/tovar/{id}/view', [TovarController::class, 'view'])->name('tovar.view');

Route::get('/voditeli', [VoditeliController::class, 'index'])->name('voditeli.index');
Route::get('/voditeli/create', [VoditeliController::class, 'create'])->name('voditeli.create');
Route::post('/voditeli', [VoditeliController::class, 'store'])->name('voditeli.store');
Route::get('/voditeli/{id}/edit', [VoditeliController::class, 'edit'])->name('voditeli.edit');
Route::put('/voditeli/{id}', [VoditeliController::class, 'update'])->name('voditeli.update');
Route::delete('/voditeli/{id}', [VoditeliController::class, 'destroy'])->name('voditeli.destroy');
Route::get('/voditeli/{id}/view', [VoditeliController::class, 'view'])->name('voditeli.view');

Route::get('/marh', [MarhController::class, 'index'])->name('marh.index');
Route::get('/marh/create', [MarhController::class, 'create'])->name('marh.create');
Route::post('/marh', [MarhController::class, 'store'])->name('marh.store');
Route::get('/marh/{id}/edit', [MarhController::class, 'edit'])->name('marh.edit');
Route::put('/marh/{id}', [MarhController::class, 'update'])->name('marh.update');
Route::delete('/marh/{id}', [MarhController::class, 'destroy'])->name('marh.destroy');
Route::get('/marh/{id}/view', [MarhController::class, 'view'])->name('marh.view');

Route::get('/avto', [AvtoController::class, 'index'])->name('avto.index');
Route::get('/avto/create', [AvtoController::class, 'create'])->name('avto.create');
Route::post('/avto', [AvtoController::class, 'store'])->name('avto.store');
Route::get('/avto/{id}/edit', [AvtoController::class, 'edit'])->name('avto.edit');
Route::put('/avto/{id}', [AvtoController::class, 'update'])->name('avto.update');
Route::delete('/avto/{id}', [AvtoController::class, 'destroy'])->name('avto.destroy');
Route::get('/avto/{id_avto}/view', [AvtoController::class, 'view'])->name('avto.view');

Route::get('/', function () {
    return view('auth.login');
})->name('login');
Route::get('/home', function () {
    return view('home');
})->middleware(['auth', 'verified'])->name('home');
Route::get('/about', function () {
    return view('about');
})->name('about');
Route::get('/contact', function () {
    return view('contact');
})->name('contact');
Route::get('/table', function () {
    return view('table');
})->name('table');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware('auth')->prefix('admin_panel')->group(function () {
    Route::get('/', [App\Http\Controllers\Admin\HomeController::class, 'index'])->name('homeAdmin'); // /admin

    Route::resource('avto', AvtoController::class);
    Route::resource('marh', MarhController::class);
    Route::resource('voditeli', VoditeliController::class);
    Route::resource('garage', GarageController::class);
    Route::resource('tovar', TovarController::class);
    Route::resource('dispet', DispetController::class);
    Route::resource('category', CategoryController::class);
    Route::resource('post', PostController::class);
});

require __DIR__.'/auth.php';