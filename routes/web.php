<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CreatureController;

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
    return view('main');
});

Route::resource('creatures', CreatureController::class);

Route::get('/', function()
{
    return View::make('pages.main');
});
Route::get('about', function()
{
    return View::make('pages.about');
});
Route::get('contact', function()
{
    return View::make('pages.contact');
});