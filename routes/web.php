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
    return view('welcome');
});

Route::get('/financial-report', [App\Http\Controllers\ReportController::class, 'financial_report'] );

Route::get('/financial-statement', [App\Http\Controllers\ReportController::class, 'financial_statement'] );

Route::get('/download-financial/{name}', [App\Http\Controllers\ReportController::class, 'financial_fetch'] );

Route::post('/financial-report/uploaded', [App\Http\Controllers\ReportController::class, 'financial_upload'] );
