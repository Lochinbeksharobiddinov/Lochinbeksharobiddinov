<?php
use App\Http\Controllers\CarsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;

Route::get('/', [PageController::class, 'index'])->name('/');
Route::get('create', [CarsController::class, 'create'])->name('create');
Route::post('crete', [CarsController::class, 'store'])->name('store');
Route::get( 'cars/{cars}/edit/',[CarsController::class,'edit'])->name('cars.edit');
Route::put( 'cars/{cars}/edit/',[CarsController::class,'update'])->name('cars.update');
Route::delete( 'cars/{cars}/delete/',[CarsController::class,'delete'])->name('cars.delete');




   



