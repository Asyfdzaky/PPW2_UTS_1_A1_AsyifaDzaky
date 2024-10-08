<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\pemainController;


Route::get('/', function () {
    return view('welcome');
});

route::get('/index',[pemainController::class,'index']) ->name('pemain.index');