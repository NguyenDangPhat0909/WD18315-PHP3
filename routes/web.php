<?php

use App\Http\Controllers\phatndph39954Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\productController;
use App\Http\Controllers\UserController;

// GET, POST, PUT, PATCH, DELETE, (METHOD HTTP)
// Base URL: http://127.0.0.1:8000

// http://127.0.0.1:8000/test
Route::get('test' , function(){
    echo "123";
});

//http://127.0.0.1:8000
Route::get('/' , function(){
    echo "Trang Chủ";
});

// Route::get('list-product', [productController::class, 'showProduct']);

// //Truyền dữ liệu từ route -> Controller

// // Slug
// // http://127.0.0.1:8000/get-product/3/phat
// Route::get('get-product/{id}/{name?}', [productController::class, 'getProduct']);

// // Params
// // http://127.0.0.1:8000/update-product?id=3&name=iphone
// Route::get('update-product', [productController::class, 'updateProduct']);


// // Lab 1: Tạo 1 view có nội dung là thông tin giới thiệu về bản thân sinh viên
// // - Tạo controller là tên sinh viên rồi định nghĩa action để nạp view vừa tạo
// // - Tạo route tên thongtinsv để chuyển vào action vừa tạo.
// // - Định dạng css các view cho đẹp

Route::get('thongtinsv', [phatndph39954Controller::class, 'showThongTin']);

// ////////////////////////////////////////////////////////////////////////////////////////

// Route::get('query-builder', [productController::class, 'queryBuilder']);

//Crud bằng users
// BASE_URL

Route::group(['as' => 'users.'], function(){
    Route::get('list-users', [UserController::class,'listUsers'])->name('listUsers');
      
    Route::get('add-users', [UserController::class,'addUsers'])->name('addUsers');  
    Route::post('add-users', [UserController::class,'addPostUsers'])->name('addPostUsers');  

    Route::get('delete-users/{iduser}', [UserController::class,'deleteUsers'])->name('deleteUsers');
});


Route::group(['as' => 'products.'], function(){
    Route::get('list-products', [productController::class,'listProducts'])->name('listProducts');

    Route::get('add-products', [productController::class,'addProducts'])->name('addProducts'); 
    Route::post('add-products', [productController::class,'addPostProducts'])->name('addPostProducts');
    
    Route::get('delete-products/{idproduct}', [productController::class,'deleteProducts'])->name('deleteProducts'); 

    Route::get('/{id}/edit', [productController::class, 'editProducts'])->name('editProducts');
    Route::patch('/{id}', [productController::class, 'updateProducts'])->name('updateProducts');
});