<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Student;
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

Route::get('/student', [Student::class,'greet'] );

Route::get('/', function (){ 
	return view('home'); 
})->name('h');


Route::get('/contact-us', function (){ 
	return view('contact'); 
})->name('c');


Route::get('/about-us', function (){ 
	return view('about'); 
})->name('a');


Route::get('/template', function(){
	return view('index');
})->name('temp');



Route::get('/element', function(){
	return view('elements');
})->name('e');



Route::get('/all-posts', function(){
	return view('crud.view');
});
// Route::get('/myController', [Student::class,'greet']);