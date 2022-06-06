<?php
namespace App;

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\AdminController;

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

Route::get('/signout', [LoginController::class, 'signout'])->name('signout');


Route::middleware(['auth'])->group(function () {
   
    Route::get('/', function(){
       return redirect('/admin');
    });

    Route::get('/index', function(){
       return redirect('/admin');
    });

    Route::resource('admin', AdminController::class);
    Route::post('/new_group_save', [AdminController::class, 'group_save']);

});

Route::get('/login', function () {
    return view('login');
})->name('login');
Route::get('/signup', function () {
    return view('register');
})->name('signup');

Route::post('/signup', [RegisterController::class, 'index']);
Route::post('/login', [LoginController::class, 'index']);
Route::get('/test', [AdminController::class, 'test']);
