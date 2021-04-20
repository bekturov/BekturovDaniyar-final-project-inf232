<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CountriesController;
use App\Http\Controllers\MailController;
use App\Http\Controllers\PeopleController;
use App\Http\Controllers\MailComtroller;
use App\Http\Controllers\LocController;


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
Route::get('/countries/{lang}', [CountriesController::class, 'index'])->name('countries');
Route::get('/countries/create/{lang}', function($lang){
    return view('countries.create');
});
Route::post('countries/create/{lang}', [CountriesController::class, 'store'])->name('add-countries');

Route::get('/people/{lang}', [PeopleController::class, 'index'])->name('people');
Route::get('/people/create/{lang}', function($lang){
    return view('people.create');
});
Route::post('people/create/{lang}', [PeopleController::class, 'store'])->name('add-people');

Route::get('/mail/send/', [MailComtroller::class, 'index']) -> name('send-mail');
Route::post('/mail/send/', [MailComtroller::class, 'send']) -> name('send_mail');
