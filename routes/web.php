<?php

use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {

     // Translates to 'en' from auto-detected language by default

//    echo $tr->translate('Hello World!');

    return view('welcome');
});


Route::post('translate',[\App\Http\Controllers\TranslationsController::class,'translate'])->name('translate');
