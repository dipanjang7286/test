<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DemoController;
use App\Http\Controllers\PhotoController;
use App\Http\Controllers\RegistrationController;
use App\Http\Controllers\SingleActionController;

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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::middleware([
//     'auth:sanctum',
//     config('jetstream.auth_session'),
//     'verified'
// ])->group(function () {
//     Route::get('/dashboard', function () {
//         return view('dashboard');
//     })->name('dashboard');
// });

// Route::get('/{name?}',function($name = null){
//     $demo = '<h2>dipanjan</h2>';
//     $data = compact('name', 'demo');
//     return view('home')->with($data);
// });
// 
//--/
// Route::get('/',function(){
//     return view('home1');
// });
// Route::get('/about', function () {
//     return view('about');
// });
// Route::get('/course', function () {
//     return view('course');
// });
////
// route using Controllers
Route::get('/',[DemoController::class, 'index']);
Route::get('/about', [DemoController::class, 'about']);
Route::get('/course', SingleActionController::class);
Route::resource('/photo', PhotoController::class);

////

Route::get('/register',[RegistrationController::class, 'index']);
Route::post('/register', [RegistrationController::class, 'register']);