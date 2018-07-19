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
Route::get('/klijent/izmeni/{id}', 'ClientController@edit')->name('client.edit');
Route::post('/client/update/{id}', 'ClientController@update')->name('client.update');

Route::get('/faktura/kreiraj', 'InvoiceController@create')->name('addInvoice');
Route::post('/invoice/store', 'InvoiceController@store')->name('addInvoice.store');
Route::get('/faktura/{id}', 'InvoiceController@show')->name('invoice.show');
Route::get('/invoice/delete/{id}', 'InvoiceController@destroy')->name('invoice.delete');
Route::get('/faktura/izmeni/{id}', 'InvoiceController@edit')->name('invoice.edit');
Route::post('/invoice/update/{id}', 'InvoiceController@update')->name('invoice.update');

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

Route::get('/getclients', 'ClientController@getclients');
// Route::get('/searchclients', 'ClientController@searchclients');

Route::get('/test', function() {
    // $inco = IncomingInvoice::all();
    // $ara = [];
    // foreach($inco as $in) {
    //     array_push($ara, $in->client->naziv);
    // }
    // $workbooks = Workbook::find(5)->load('workbook_item');
    // print_r($workbooks);
});