<?php

use Illuminate\Support\Facades\Route;
use App\Mail\ContactFormMail;
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

//Route::view('/','home')->name('home');

Route::get('contact', 'ContactFormController@create')->name('contact.create');
Route::post('contact', 'ContactFormController@store')->name('contact.store');


Route::view('about', 'about')->name('about');
Route::resource('customers', 'CustomersController');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
