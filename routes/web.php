<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminPanel\HomeController as AdminHomeController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
| Test Comment
*/
//1-Do something  in route
Route::get('/hello', function () {
    return 'Hello World';
});
// 2-Call view in route
Route::get('/', function () {
    return view('welcome');
});
//3- Call controller function
Route::get('/',[HomeController::class,'index'])->name('home');
// 4-Route->controller-> view
Route::get('/test',[HomeController::class,'test'])->name('test');
// 5- Route with parameters
Route::get('/param/{id}/{number}',[HomeController::class,'param'])->name('param');
// 6- Route with post
Route::post('/save',[HomeController::class,'save'])->name('save');


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
//-------admin panel route
Route::get('/admin',[AdminHomeController::class,'index'])->name('home');
//-------admin category route
Route::get('/admin/category',[\App\Http\Controllers\AdminPanel\CategoryController::class,'index'])->name('admin_category');
Route::get('/admin/category/create',[\App\Http\Controllers\AdminPanel\CategoryController::class,'create'])->name('admin_category_create');
//this is for storing the data in the form, we use post method
Route::post('/admin/category/store',[\App\Http\Controllers\AdminPanel\CategoryController::class,'store'])->name('admin_category_store');

