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

Route::get('/klijent/kreiraj', 'ClientController@create')->name('addClient');
Route::post('/client/store', 'ClientController@store')->name('addClient.store');
Route::get('/klijent/{id}', 'ClientController@show')->name('client.show');
Route::get('/client/delete/{id}', 'ClientController@destroy')->name('client.delete');

Route::get('/faktura/kreiraj', 'InvoiceController@create')->name('addInvoice');
Route::post('/invoice/store', 'InvoiceController@store')->name('addInvoice.store');
Route::get('/faktura/{id}', 'InvoiceController@show')->name('invoice.show');
Route::get('/invoice/delete/{id}', 'InvoiceController@destroy')->name('invoice.delete');

Route::get('/ulazna-faktura/kreiraj', 'IncomingInvoicesController@create')->name('addIncomingInvoice');
Route::post('/incoming-invoice/store', 'IncomingInvoicesController@store')->name('addIncomingInvoice.store');
Route::get('/ulazna-faktura/{id}', 'IncomingInvoicesController@show')->name('incoming.show');
Route::get('/incoming-invoice/delete/{id}', 'IncomingInvoicesController@destroy')->name('incoming.delete');

Route::get('/delovodnik/kreiraj', 'WorkbookController@create')->name('addWorkbook');
Route::post('/workbook/store', 'WorkbookController@store')->name('addWorkbook.store');
Route::get('/delovodnik/{id}', 'WorkbookController@show')->name('workbook.show');
Route::get('/workbook/delete/{id}', 'WorkbookController@destroy')->name('workbook.delete');

