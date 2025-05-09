<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SignInController;


Route::get('/', function () {
    return view('welcome');
});


