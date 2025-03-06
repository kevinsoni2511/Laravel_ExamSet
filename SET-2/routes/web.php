<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WorkoutPlanController;


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
Route::post('/submitform', [WorkoutPlanController::class, 'submitform']);


// Route::get('/', [MenuItemController::class, 'home'])->name('home');
Route::get('/workoutplan', [WorkoutPlanController::class, 'Workoutplan']);
Route::get('/subscribe', [WorkoutPlanController::class, 'subscribe']);

Route::get('/', function(){
    return view('home');
});
Route::get('/Workoutplan', function(){
    return view('Workoutplan');
});Route::get('/subscribe', function(){
    return view('subscribe');
});