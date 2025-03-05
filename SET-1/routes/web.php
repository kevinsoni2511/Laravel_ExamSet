<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MenuItemController;


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
Route::post('/submitform', [MenuItemController::class, 'submitform']);


// Route::get('/', [MenuItemController::class, 'home'])->name('home');
Route::get('/menu', [MenuItemController::class, 'menu']);
Route::get('/place-order', [MenuItemController::class, 'placeOrder']);

Route::get('/', function(){
    return view('home');
});
Route::get('/menu', function(){
    return view('menu');
});Route::get('/placeOrder', function(){
    return view('placeOrder');
});