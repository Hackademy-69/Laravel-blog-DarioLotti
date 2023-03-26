<?php

use App\Http\Controllers\PublicController;
use Illuminate\Support\Facades\Route;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/homepage',[PublicController::class,'homepage']) ->name ('homepage') ;
Route::get('/HarryPotter',[PublicController::class,'HarryPotter']) ->name ('personaggi') ;
Route::get('/HarryPotter/dettaglio/{name}',[PublicController::class,'HarryPotter_dettaglio']) ->name ('HarryPotter.dettaglio') ;

    

