<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\RoleController;
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

Route::get('items', [ItemController::class, 'index']);
Route::get('items/{id}', [ItemController::class, 'show']);
Route::get('items/search/{name}', [ItemController::class, 'search']);
Route::post('items', [ItemController::class, 'store']);
Route::put('items/{id}', [ItemController::class, 'update']);
Route::delete('items/{id}', [ItemController::class, 'destroy']);

Route::get('users', [UserController::class, 'index']);
Route::get('users/{id}', [UserController::class, 'show']);
Route::get('users/search/{name}', [UserController::class, 'search']);
Route::post('users', [UserController::class, 'store']);
Route::put('users/{id}', [UserController::class, 'update']);
Route::delete('users/{id}', [UserController::class, 'destroy']);

Route::get('profiles', [ProfileController::class, 'index']);
Route::get('profiles/{id}', [ProfileController::class, 'show']);
Route::get('profiles/search/{name}', [ProfileController::class, 'search']);
Route::post('profiles', [ProfileController::class, 'store']);
Route::put('profiles/{id}', [ProfileController::class, 'update']);
Route::delete('profiles/{id}', [ProfileController::class, 'destroy']);

Route::get('posts', [PostController::class, 'index']);
Route::get('posts/{id}', [PostController::class, 'show']);
Route::get('posts/search/{name}', [PostController::class, 'search']);
Route::post('posts', [PostController::class, 'store']);
Route::put('posts/{id}', [PostController::class, 'update']);
Route::delete('posts/{id}', [PostController::class, 'destroy']);

Route::get('comments', [CommentController::class, 'index']);
Route::get('comments/{id}', [CommentController::class, 'show']);
Route::get('comments/search/{name}', [CommentController::class, 'search']);
Route::post('comments', [CommentController::class, 'store']);
Route::put('comments/{id}', [CommentController::class, 'update']);
Route::delete('comments/{id}', [CommentController::class, 'destroy']);

Route::get('roles', [RoleController::class, 'index']);
Route::get('roles/{id}', [RoleController::class, 'show']);
Route::get('roles/search/{name}', [RoleController::class, 'search']);
Route::post('roles', [RoleController::class, 'store']);
Route::put('roles/{id}', [RoleController::class, 'update']);
Route::delete('roles/{id}', [RoleController::class, 'destroy']);