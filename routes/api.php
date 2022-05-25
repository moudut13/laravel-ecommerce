<?php

use App\Http\Controllers\Admin\AdminUserController;
use App\Http\Controllers\Admin\CategoryFirstController;
use App\Http\Controllers\Admin\CategorySecondController;
use App\Http\Controllers\Admin\CategoryThirdController;
use App\Http\Controllers\Admin\PermissionController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\TagsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

//Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//    return $request->user();
//});


//Admin Route Permission
Route::get('admin/permission',[PermissionController::class ,'index'])->name('Permission.Index');
Route::post('admin/permission',[PermissionController::class , 'store'])->name('Permission.Store');
Route::put('admin/permission/{id}',[PermissionController::class , 'status'])->name('Permission.status');
Route::delete('admin/permission/{id}',[PermissionController::class , 'destroy'])->name('Permission.Destroy');

//Admin Route Role
Route::get('admin/role',[RoleController::class ,'index'])->name('role.Index');
Route::post('admin/role',[RoleController::class , 'store'])->name('role.Store');
Route::put('admin/role/{id}',[RoleController::class , 'status'])->name('role.status');
Route::delete('admin/role/{id}',[RoleController::class , 'destroy'])->name('role.Destroy');


//Product Route All
//Admin Route Category First
Route::get('admin/category-first',[CategoryFirstController::class ,'index'])->name('category-first.index');
Route::post('admin/category-first',[CategoryFirstController::class , 'store'])->name('category-first.store');
Route::put('admin/category-first/{id}',[CategoryFirstController::class , 'status'])->name('category-first.status');
Route::delete('admin/category-first/{id}',[CategoryFirstController::class , 'destroy'])->name('category-first.destroy');

//Admin Route Category Second
Route::get('admin/category-second',[CategorySecondController::class ,'index'])->name('category-second.index');
Route::post('admin/category-second',[CategorySecondController::class , 'store'])->name('category-second.store');
Route::put('admin/category-second/{id}',[CategorySecondController::class , 'status'])->name('category-second.status');
Route::delete('admin/category-second/{id}',[CategorySecondController::class , 'destroy'])->name('category-second.destroy');

//Admin Route Category Third
Route::get('admin/category-third',[CategoryThirdController::class ,'index'])->name('category-third.index');
Route::post('admin/category-third',[CategoryThirdController::class , 'store'])->name('category-third.store');
Route::put('admin/category-third/{id}',[CategoryThirdController::class , 'status'])->name('category-third.status');
Route::delete('admin/category-third/{id}',[CategoryThirdController::class , 'destroy'])->name('category-third.destroy');

//Admin Route Tag Second
Route::get('admin/tag',[TagsController::class ,'index'])->name('tag.index');
Route::post('admin/tag',[TagsController::class , 'store'])->name('tag.store');
Route::put('admin/tag/{id}',[TagsController::class , 'status'])->name('tag.status');
Route::delete('admin/tag/{id}',[TagsController::class , 'destroy'])->name('tag.destroy');

//Admin Route Product
Route::get('admin/product',[ProductController::class ,'index'])->name('product.index');
Route::post('admin/product',[ProductController::class , 'store'])->name('product.store');
Route::put('admin/product/{id}',[ProductController::class , 'status'])->name('product.status');
Route::delete('admin/product/{id}',[ProductController::class , 'destroy'])->name('product.destroy');

//Admin Route Admin User
Route::get('admin/user',[AdminUserController::class ,'index'])->name('user.index');
Route::post('admin/user',[AdminUserController::class , 'store'])->name('user.store');
Route::put('admin/user/{id}',[AdminUserController::class , 'status'])->name('user.status');
Route::delete('admin/user/{id}',[AdminUserController::class , 'destroy'])->name('user.destroy');
