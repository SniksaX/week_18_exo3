<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\GiftController;

Route::get('/', function () {
    return redirect()->route('gifts.index');
});

Route::resource('gifts', GiftController::class);