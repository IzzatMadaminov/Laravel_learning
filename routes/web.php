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

Route::view('/','home');

Route::get('contact', 'ContactFormController@create');
Route::post('contact', 'ContactFormController@store');
// Route::get('contact', function() {
//     return new ContactFormMail();
// });

Route::get('about', function(){
    return view('about');
});  
Route::resource('customers', 'CustomersController');

