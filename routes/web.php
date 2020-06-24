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

Route::get('/', function () {
    return view('auth.login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// users
Route::get('/users', 'UsersController@index')->name('profile');
Route::get('/users/create-new', 'UsersController@create_page')->name('create');



// orders
Route::get('/orders', 'OrdersController@index')->name('index');
Route::get('/orders/create-new', 'OrdersController@create_page')->name('create');
Route::post('/orders/create-new', 'OrdersController@save_page')->name('create');
Route::get('/orders/update/{order}', 'OrdersController@update_page')->name('edit');
Route::post('/orders/update/{order}', 'OrdersController@update_save')->name('update');
Route::get('/orders/view/{order}', 'OrdersController@view_orders')->name('view');

// Invoices
Route::get('/invoices', 'InvoicesController@index')->name('index');
Route::get('/invoices/create-new', 'InvoicesController@create_page')->name('create_page');
Route::post('/invoices/create-new', 'InvoicesController@save_page')->name('create_page');
Route::get('/invoices/update/{invoices}', 'InvoicesController@update_page')->name('edit');
Route::post('/invoices/update/{invoices}', 'InvoicesController@update_save')->name('edit');
Route::delete('/invoices/delete/{invoices}', 'InvoicesController@delete')->name('delete');
Route::get('/invoices/view/{invoices}', 'InvoicesController@view_invoices')->name('view');

// Invoices Tags
Route::get('/invoicestags', 'InvoicesTagsController@index')->name('index');