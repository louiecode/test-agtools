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

Route::get('/', 'Home@index');

Route::get('/dashboard', 'Dashboard@index');

Route::resource('/expense_reports', 'ExpenseReportController');

Route::get('expense_reports/{id}/confirmDelete', 'ExpenseReportController@confirmDelete');

Route::get('expense_reports/{expense_report}/expenses/create', 'ExpenseController@create');

Route::post('expense_reports/{expense_report}/expenses', 'ExpenseController@store');

Route::get('expense_reports/{id}/confirmSendMail', 'ExpenseReportController@confirmSendMail');

Route::post('expense_reports/{id}/sendMail', 'ExpenseReportController@sendMail');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
