<?php

// use App\Http\Controllers\AdminController;
use App\Http\Controllers\usersController;
use Illuminate\Support\Facades\Route;

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
// Route::get('/test', function () {
//     $name = "castillo";
//     return view('test', compact('name'));
// });



// Route::get('/admin',[AdminController::class, 'showAdmon' ]);
// Route::get('/create',[AdminController::class, 'createAdmin' ]);
// Route::get('/update',[AdminController::class, 'updateAdmin' ]);



// Route::controller(AdminController::class)->group(function () {
//     Route::get('/admin', 'showAdmon');
//     Route::get('/create', 'createAdmin');
//     Route::get('/update', 'updateAdmin');
// });   



Route::resource('/users', usersController::class);