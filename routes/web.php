<?php

use App\Http\Controllers\SiteController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
// | contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('Ahmed/{str?}', function ($str = null) {
//     return "hello world " . $str;
// });

// Route::get('Ahmed/{str}', function ($str) {
//     return "hello world " . $str;
// });  

Route::get('/', function () {
    return view('master');
});

Route::get('home', function () {
    return view('site1.home');
});


Route::prefix('site2')->controller(SiteController::class)->name('site2.')->group(function () {
    Route::get('/index', 'index')->name('index');
    Route::get('/contact', 'contact')->name('contact');
    Route::get('/about', 'about')->name('about');
    Route::get('/service', 'service')->name('service');
});
