<?php
//
//use Illuminate\Http\Request;
//use Illuminate\Support\Facades\Route;
//
//Route::get('/user', function (Request $request) {
//    return $request->user();
//})->middleware('auth:sanctum');
use App\Http\Controllers\ProductsController;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:sanctum')->get('/user', function (\http\Env\Request $request) {
    return $request->user();
});
Route::post('add-product', [ProductsController::class, 'adding']);
Route::get('get-product', [ProductsController::class, 'getProducts']);
Route::put('edit-product', [ProductsController::class, 'edit']);
Route::delete('delete-product', [ProductsController::class, 'delete']);
