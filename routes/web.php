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
    return view('sites.Strona_Glowna');
});
Route::get('/contact','App\Http\Controllers\SitesController@showContactPage');
Route::get('/product','App\Http\Controllers\SitesController@showProductPage');
Route::get('/order','App\Http\Controllers\SitesController@showOrderPage');
Route::get('/customer','App\Http\Controllers\SitesController@showCustomerPage');
Route::get('/gallery','App\Http\Controllers\SitesController@showGalleryPage');
Route::get('/event','App\Http\Controllers\SitesController@showEventPage');

Route::post('/save1', [
    'uses' => 'App\Http\Controllers\SitesController@saveProductAdd',
    'as' => 'sites.saveProductAdd'
]);

Route::post('/save2', [
    'uses' => 'App\Http\Controllers\SitesController@saveProductUpdate',
    'as' => 'sites.saveProductUpdate'
]);

Route::post('/save3', [
    'uses' => 'App\Http\Controllers\SitesController@saveProductDelete',
    'as' => 'sites.saveProductDelete'
]);

Route::post('/save4', [
    'uses' => 'App\Http\Controllers\SitesController@saveCustomerAdd',
    'as' => 'sites.saveCustomerAdd'
]);
Route::post('/save5', [
    'uses' => 'App\Http\Controllers\SitesController@saveOrderAdd',
    'as' => 'sites.saveOrderAdd'
]);
Route::post('/save6', [
    'uses' => 'App\Http\Controllers\SitesController@saveEventAdd',
    'as' => 'sites.saveEventAdd'
]);

Auth::Routes();

Route::get('/logout', 'App\Http\Controllers\Auth\LoginController@logout');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


