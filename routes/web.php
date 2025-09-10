<?php

use App\Http\Controllers\PortafolioController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/index', function () {
    return view('index');
});



route::get('/portafolio',[PortafolioController::class,'index'])->name('portafolio');

route::get('/portafolio2',[PortafolioController::class,'vista2'])->name('portafolio2');
route::post('/portafolio',[PortafolioController::class,'store'])->name('portafolio.store');

