<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FirebaseController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/firebase/store', [FirebaseController::class, 'store']);
Route::get('/firebase/fetch', [FirebaseController::class, 'fetch']);