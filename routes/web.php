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
    return view('index');
});

Route::get('/company-profile', function () {
    return view('company-profile');
});

Route::get('/vision-mission', function () {
    return view('vision-mission');
});

Route::get('/board-of-directors', function () {
    return view('board-of-directors');
});

Route::get('/managment-team', function () {
    return view('managment-team');
});

Route::get('/regulatory-information', function () {
    return view('regulatory-information');
});

Route::get('/careers', function () {
    return view('careers');
});


Route::get('/financial-report', [App\Http\Controllers\ReportController::class, 'financial_report'] );

Route::get('/financial-statement', [App\Http\Controllers\ReportController::class, 'financial_statement'] );

Route::get('/download-financial/{name}', [App\Http\Controllers\ReportController::class, 'financial_fetch'] );

Route::post('/financial-report/uploaded', [App\Http\Controllers\ReportController::class, 'financial_upload'] );
