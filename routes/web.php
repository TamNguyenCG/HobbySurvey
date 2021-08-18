<?php

use App\Http\Controllers\FoodController;
use App\Http\Controllers\PetController;
use App\Http\Controllers\SurveyController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;

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


Route::get('/',[SurveyController::class,'welcome'])->name('welcome');
Route::post('/',[SurveyController::class,'createEmail'])->name('createEmail');

Route::get('food',[FoodController::class,'getAllFoods'])->name('showFoods');
Route::get('food/{id?}',[FoodController::class,'selectFood'])->name('selectFood');

Route::get('pet',[PetController::class,'getAllPets'])->name('showPets');
Route::get('pet/{id?}',[PetController::class,'selectPet'])->name('selectPet');

Route::get('survey_result',[SurveyController::class,'surveyResult'])->name('result');


