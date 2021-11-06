<?php

use App\Http\Controllers\PageController;
use App\Models\Car;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|gg
*/

Route::get('/', function () {
    // $cars = Car::all()->toJson();
    // $cars = json_decode($cars);

    // var_dump($cars);

    // Counting data
    // print_r($cars->count());

    $cars = Car::all();
    return view('car.index',compact('cars'));
});
Route::resource('car', PageController::class);