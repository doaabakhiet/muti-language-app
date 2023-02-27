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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', function () {
    return view('index');
});
//session way
Route::get('locale/{lang}', [App\Http\Controllers\LocalizationController::class, 'setLang']);
Route::middleware('localization')->group(function () {
    Route::get('/', function () {
        return view('index');
    });
});
//using mcamara and transblitic
Route::get('/home', function () {
    return view('home');
});

// Route::get('/home', function () {
//     // return config('app.langauges');
//     // return view('home');
// });
