<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

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


Route::get('/', function () {
    return view('index');
});
Route::get('/login', function () {
    return view('login');
});

// Route::get('/add', function () {
//     return view('add');
// });

// Route::get('/customerprofile', function () {
//     return view('customerprofile');
// });

Route::get('/customerprofile/{id}', [AuthController::class, 'show']);
Route::post('/customerprofile', [AuthController::class, 'showUpdate']);

Route::get('/login', [AuthController::class, 'loginView']);
Route::post('/login', [AuthController::class, 'loginStore']);

Route::get('/register', [AuthController::class, 'RegisterView']);
Route::post('/register', [AuthController::class, 'RegisterStore']);

Route::get('/add',[AuthController::class, 'viewdata']);


Route::get('/addEmployee',[AuthController::class, 'store']);
Route::post('/addEmployee',[AuthController::class, 'storedata']);






