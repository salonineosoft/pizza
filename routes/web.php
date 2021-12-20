<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Main;
use App\Models\menu;
use App\Http\Controllers\website;

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
Route::get('login',[Main::class,'login']);
Route::get('register',[Main::class,'register']);
Route::get('home',[Main::class,'home']);
Route::post('insertregis',[Main::class,'insertregis']);
Route::post('loginpart',[Main::class,'loginpart']);
Route::get('menu',[Main::class,'menu']);
Route::get('addcard/{id}',[Main::class,'addcard']);
Route::get('logout',[Main::class,'logout']);
Route::get('addcart/{id}',[Main::class,'addcart']);
Route::post('insert/{id}',[Main::class,'addcard']);
Route::get('details',[Main::class,'details']);
Route::get('show',[Main::class,'show']);
Route::get('/del/{id}',[Main::class,'del']);
Route::get('/checkout/{tot}',[Main::class,'checkout']);
Route::post('/payment',[Main::class,'payment']);
Route::get('/success',[Main::class,'success']);
Route::get('/order',[Main::class,'order']);


//mail sending
Route::post('/success',[website::class,'index']);
//Route::post('/sendmail',[website::class,'cart']);

