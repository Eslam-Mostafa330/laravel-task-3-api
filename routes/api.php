<?php

use App\Http\Controllers\api\category;
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

// Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::get('categories', [category::class, "index"]);

Route::get('categories/{id}', [category::class, "show"]);

Route::post('categories', [category::class, "store"]);

Route::delete("categories/{id}", [category::class, "delete"]);

Route::put("categories/{id}", [category::class, "update"]);
