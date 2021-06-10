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

Route::get('/audit-committee', function () {
    return view('audit-committee');
});

Route::get('/sponsors', function () {
    return view('sponsors');
});

Route::get('/services', function () {
    return view('services');
});

Route::get('/auditor-advisor', function () {
    return view('auditor-advisor');
});

Route::get('/useful-links', function () {
    return view('useful-links');
});

Route::get('/media', function () {
    return view('media');
});

Route::get('/research', function () {
    return view('research');
});

Route::get('/downloads', function () {
    return view('downloads');
});

Route::get('/faqs', function () {
    return view('faqs');
});

Route::get('/investor-complaints', function () {
    return view('investor-complaints');
});

Route::get('/customer-support', function () {
    return view('customer-support');
});

Route::get('/penal-action', function () {
    return view('penal-action');
});

Route::get('/feedback', function () {
    return view('feedback');
});

Route::get('/contact-us', function () {
    return view('contact-us');
});

Route::get('/open-account', function () {
    return view('open-account');
});

Route::get('/policies', function () {
    return view('policies');
});

Route::get('/online-account-opening', function () {
    return view('online-account-opening');
});

Route::get('/net-capital-report', [App\Http\Controllers\ReportController::class, 'net_capital_report'] )->middleware('auth');

Route::get('/financial-report', [App\Http\Controllers\ReportController::class, 'financial_report'] )->middleware('auth');

Route::get('/logout', [App\Http\Controllers\ReportController::class, 'logout'] );

Route::get('/download-financial/{name}', [App\Http\Controllers\ReportController::class, 'financial_fetch'] );

Route::get('/download-net-capital/{name}', [App\Http\Controllers\ReportController::class, 'capital_fetch'] );

Route::post('/financial-report/uploaded', [App\Http\Controllers\ReportController::class, 'financial_upload'] )->middleware('auth');

Route::post('/net-capital-report/uploaded', [App\Http\Controllers\ReportController::class, 'net_capital_upload'] )->middleware('auth');

Route::get('/net-capital-balance', [App\Http\Controllers\ReportController::class, 'net_capital_balance'] );

Route::get('/financial-statement', [App\Http\Controllers\ReportController::class, 'financial_statement'] );