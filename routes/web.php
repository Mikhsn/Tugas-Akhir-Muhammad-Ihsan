<?php

use App\Http\Controllers\MasterController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('layout');
// });

// Route::get('/', function () {
//     return view('home');
// });

Route::get('/home',[MasterController::class, 'index']);
Route::get('/home/journals',[MasterController::class, 'journals']);
Route::get('/home/conferences',[MasterController::class, 'conferences']);
Route::get('/home/news',[MasterController::class, 'news']);
Route::get('/home/news/news-single',[MasterController::class, 'newssingle']);
Route::get('/home/ourteam',[MasterController::class, 'ourteam']);



// Route::get('/ourteam', function () {
//     return view('ourteam');
// });

// Route::get('/conferences', function () {
//     return view('conferences');
// });

// Route::get('/news', function () {
//     return view('news');
// });

// Route::get('/news-single', function () {
//     return view('news-single');
// });
