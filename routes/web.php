<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HsController;
use App\Http\Controllers\SvController;
use Illuminate\Support\Facades\Mail;
use App\Mail\GuiMail;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/guimail', function() {
    Mail::send(new GuiMail());
});

Route::get('hs', [HsController::class, 'hs']);
Route::post('hs', [HsController::class, 'hs_store'])->name('hs_store');


Route::get('sv', [SvController::class, 'sv']);
Route::post('sv', [SvController::class, 'sv_store'])->name('sv_store');
