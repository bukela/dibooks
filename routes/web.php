<?php

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

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Route::get('/fakture', 'InvoiceController@index')->name('invoices');
Route::get('/ulazne-fakture', 'IncomingInvoicesController@index')->name('incominginvoices');
Route::get('/klijenti', 'ClientController@index')->name('clients');
Route::get('/delovodnici', 'WorkbookController@index')->name('workbooks');

Route::get('/client/create', 'ClientController@create')->name('addClient');
Route::post('/client/store', 'ClientController@store')->name('addClient.store');
Route::get('/client/{id}', 'ClientController@show')->name('client.show');

Route::get('/invoice/create', 'InvoiceController@create')->name('addInvoice');
Route::post('/invoice/store', 'InvoiceController@store')->name('addInvoice.store');
Route::get('/invoice/{id}', 'InvoiceController@show')->name('invoice.show');

Route::get('/incoming-invoice/create', 'IncomingInvoicesController@create')->name('addIncomingInvoice');
Route::post('/incoming-invoice/store', 'IncomingInvoicesController@store')->name('addIncomingInvoice.store');
Route::get('/incoming-invoice/{id}', 'IncomingInvoicesController@show')->name('incoming.show');

Route::get('/workbook/create', 'WorkbookController@create')->name('addWorkbook');
Route::post('/workbook/store', 'WorkbookController@store')->name('addWorkbook.store');
Route::get('/workbook/{id}', 'WorkbookController@show')->name('workbook.show');

