<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ChangeController;

Route::get('',[HomeController::class, 'index'])->name('admin.home');
Route::get('/delete',[ChangeController::class, 'listadelete'])->name('admin.delete');
Route::get('/change',[ChangeController::class, 'index'])->name('admin.change');
Route::get('/change/{change}/edit',[ChangeController::class, 'edit'])->name('admin.change.edit');
Route::delete('/change/{change}',[ChangeController::class, 'destroy'])->name('admin.change.destroy');
Route::get('/change/create',[ChangeController::class, 'create'])->name('admin.change.create');
Route::post('/change/store',[ChangeController::class, 'store'])->name('admin.change.store');
Route::put('/change/{change}',[ChangeController::class, 'update'])->name('admin.change.update');
//Route::resource('changes',ChangeController::class)->name('admin.changes');
