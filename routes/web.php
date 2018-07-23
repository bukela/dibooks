<?php

use App\Invoice;



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
Route::get('/klijent/izmeni/{id}', 'ClientController@edit')->name('client.edit');
Route::post('/client/update/{id}', 'ClientController@update')->name('client.update');

Route::get('/faktura/kreiraj', 'InvoiceController@create')->name('addInvoice');
Route::post('/invoice/store', 'InvoiceController@store')->name('addInvoice.store');
Route::get('/faktura/{id}', 'InvoiceController@show')->name('invoice.show');
Route::get('/invoice/delete/{id}', 'InvoiceController@destroy')->name('invoice.delete');
Route::get('/faktura/izmeni/{id}', 'InvoiceController@edit')->name('invoice.edit');
Route::post('/invoice/update/{id}', 'InvoiceController@update')->name('invoice.update');

Route::get('/invoice-item/delete/{id}', 'InvoiceItemsController@destroy')->name('invoice_item.delete');
Route::get('/faktura-item/kreiraj/{invoice_id}', 'InvoiceItemsController@create')->name('invoice_item.create');
Route::post('/invoice-item/store', 'InvoiceItemsController@store')->name('invoice_item.store');

Route::get('/ulazna-faktura/kreiraj', 'IncomingInvoicesController@create')->name('addIncomingInvoice');
Route::post('/incoming-invoice/store', 'IncomingInvoicesController@store')->name('addIncomingInvoice.store');
Route::get('/ulazna-faktura/{id}', 'IncomingInvoicesController@show')->name('incoming.show');
Route::get('/incoming-invoice/delete/{id}', 'IncomingInvoicesController@destroy')->name('incoming.delete');
Route::get('/ulazna-faktura/izmeni/{id}', 'IncomingInvoicesController@edit')->name('incoming.edit');
Route::post('/incoming-invoice/update/{id}', 'IncomingInvoicesController@update')->name('incoming.update');

Route::get('/delovodnik/kreiraj', 'WorkbookController@create')->name('addWorkbook');
Route::post('/workbook/store', 'WorkbookController@store')->name('addWorkbook.store');
Route::get('/delovodnik/{id}', 'WorkbookController@show')->name('workbook.show');
Route::get('/workbook/delete/{id}', 'WorkbookController@destroy')->name('workbook.delete');
Route::get('/workbook-item/delete/{id}', 'WorkbookItemController@destroy')->name('workbook_item.delete');
Route::get('/delovodnik-item/kreiraj/{workbook_id}', 'WorkbookItemController@create')->name('workbook_item.create');
Route::post('/workbook-item/store', 'WorkbookItemController@store')->name('workbook_item.store');
Route::get('/delovodnik/izmeni/{id}', 'WorkbookController@edit')->name('workbook.edit');
Route::post('/workbook/update/{id}', 'WorkbookController@update')->name('workbook.update');

// Route::get('/klijent', 'LiveSearch@index');
// ajax search routes
// Route::get('/live_search/clients', 'LiveSearch@clients')->name('live_search.clients');
// Route::get('/live_search/workbooks', 'LiveSearch@workbooks')->name('live_search.workbooks');

Route::get('/getworkbooks', 'WorkbookController@getworkbooks');
// Route::get('/searchworkbooks', 'WorkbookController@searchworkbooks');

Route::get('/getincoming', 'IncomingInvoicesController@getincoming');
// Route::get('/searchincoming', 'IncomingInvoicesController@searchincoming');

Route::get('/getinvoice', 'InvoiceController@getinvoice');

Route::get('/getclients', 'ClientController@getclients');
// Route::get('/searchclients', 'ClientController@searchclients');

Route::get('/test', function() {
        // $invoice_flat = $invoice->flatten();

        // $invoice_flat->all();
        // $workbooks = DB::table('workbooks')
        //    ->join('workbook_items', 'workbooks.id', '=', 'workbook_items.workbook_id')
        //    ->select('workbook_items.broj','workbooks.osnovni_broj', 'workbook_items.posiljalac')
        //    ->get();
         $invoice = DB::table('invoices')
        ->join('invoice_items', 'invoices.id', '=', 'invoice_items.invoice_id')
        ->join('clients', 'clients.id', '=', 'invoices.client_id')
        ->select('clients.naziv','invoices.broj_fakture','invoices.valuta','invoices.id',
        'invoice_items.opis','invoice_items.jedinica_mere', 'invoices.napomena','invoice_items.id as iid')
        ->get();
        return $invoice;
});