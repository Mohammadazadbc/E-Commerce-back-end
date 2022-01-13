<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RatingCotroller;
use App\Http\Controllers\cartController;
use App\Http\Controllers\produitController;
use App\Http\Controllers\memberController;
use App\Http\Controllers\adressController;
use App\Http\Controllers\nameController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::get('product', [ProductController::class,'showProduct']);
Route::post('product',[ProductController::class,'addProduct']);
Route::patch('product/{id}', [ProductController::class,'update']);
Route::delete('product/{id}',[ProductController::class,'deleteProduct']);

// Rating table api
Route::get('rate',[RatingCotroller::class,'showRating']);
Route::post('rate',[RatingCotroller::class,'addRating']);
Route::delete('rate/{id}',[RatingCotroller::class,'deleteRate']);

//Cart table api
Route::get('cart', [cartController::class,'showCart']);
Route::post('cart', [cartController::class,'addCart']);
Route::delete('cart/{id}', [cartController::class,'deleteProduct']);

//Produit
Route::get('produit', [produitController::class,'showProduit']);
Route::post('produit', [produitController::class,'addProduit']);
Route::delete('produit/{id}', [produitController::class,'deleteProduit']);


// Member table api
Route::get('member',[memberController::class,'showMember']);
Route::post('member', [memberController::class,'addMember']);
Route::delete('member/{id}', [memberController::class,'deleteMember']);

//Name table api
Route::get('name',[nameController::class,'showName']);
Route::post('name', [nameController::class,'addName']);
Route::delete('name/{id}', [nameController::class,'deleteName']);

//Adress table api
Route::get('adress',[adressController::class,'showAdress']);
Route::post('adress', [adressController::class,'addAdress']);
Route::delete('adress/{id}', [adressController::class,'deleteAdress']);

//log in
Route::post('login',[memberController::class,'login']);