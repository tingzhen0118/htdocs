<?php
use Illuminate\Support\Facades\Route;

/*
 * |--------------------------------------------------------------------------
 * | Web Routes
 * |--------------------------------------------------------------------------
 * |
 * | Here is where you can register web routes for your application. These
 * | routes are loaded by the RouteServiceProvider within a group which
 * | contains the "web" middleware group. Now create something great!
 * |
 */

Route::get('/', function () {
    return view("pages.index");
});

Route::get('/loginFarmer', function () {
    return view("pages.loginFarmer");
});
Route::get('/loginPeople', function () {
    return view("pages.loginPeople");
});

Route::get('/registerFarmer',
    function () {
        return view("pages.registerFarmer");
    });

Route::get('/registerPeople',
    function () {
        return view("pages.registerPeople");
    });


/*-----民眾頁面--尚未設定會員機制*/

Route::get('/sessionPeople',function () {return view("pages.sessionPeople");});
Route::get('/sessionFarmer',function () {return view("pages.sessionFarmer");});

Route::get('/myFavorites',function () {return view("pages.myFavorites");});