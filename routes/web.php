<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AccountController;
 
Route::resource('accounts', AccountController::class);
Route::get('/', function () {
    return view('accounts.index');
});
