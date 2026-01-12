<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\TaskController;



Route::get('/LoadAllTask', [TaskController::class, 'LoadAllTask']);
Route::post('/AddNewTask', [TaskController::class, 'AddNewTask']);
Route::put('/UpdateTask/{id}', [TaskController::class, 'UpdateTask']);
Route::delete('/DeleteTask/{id}', [TaskController::class, 'DeleteTask']);
