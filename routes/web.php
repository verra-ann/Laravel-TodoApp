<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;
use App\Models\Task;

Route::get('/', function () {
    return view('pages.home');
});

Route::get('/list', function(){
    return view('pages.list');
});

Route::view('create', 'home');

//Route::post('create', [TaskController::class, 'check']);
//Route::view('delete/{id}', 'list');

Route::post('create', [TaskController::class, 'create']);

//retrieve data / to show data
Route::get('list', [TaskController::class, 'list']);

//delete data
Route::get('delete/{id}', [TaskController::class, 'destroy']); //NAMA FUNCTION

//update data
//Route::get('edit-records', [TaskController::class, 'index']);
Route::get('edit/{id}', [TaskController::class, 'show']);
Route::post('edit/{id}', [TaskController::class, 'edit']);



