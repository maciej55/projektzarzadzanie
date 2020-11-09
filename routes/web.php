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
Route::get('/kontakt','App\Http\Controllers\SitesController@pokazkontakt');
Route::get('/dodawanie','App\Http\Controllers\SitesController@pokazdodawanie');
Route::get('/zamowienia','App\Http\Controllers\SitesController@pokazzamowienia');
Route::get('/klient','App\Http\Controllers\SitesController@pokazklienta');
Route::get('/galeria','App\Http\Controllers\SitesController@pokazgaleria');
Route::get('/wydarzenia','App\Http\Controllers\SitesController@Wydarzenia');

Route::post('/savet', [
    'uses' => 'App\Http\Controllers\SitesController@savet',
    'as' => 'sites.savet'
]);

Route::post('/savetu', [
    'uses' => 'App\Http\Controllers\SitesController@savetu',
    'as' => 'sites.savetu'
]);

Route::post('/savetd', [
    'uses' => 'App\Http\Controllers\SitesController@savetd',
    'as' => 'sites.savetd'
]);

Route::post('/savek', [
    'uses' => 'App\Http\Controllers\SitesController@savek',
    'as' => 'sites.savek'
]);
Route::post('/savez', [
    'uses' => 'App\Http\Controllers\SitesController@savez',
    'as' => 'sites.savez'
]);
Route::post('/savew', [
    'uses' => 'App\Http\Controllers\SitesController@savew',
    'as' => 'sites.savew'
]);

Auth::Routes();

Route::get('/logout', 'App\Http\Controllers\Auth\LoginController@logout');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


