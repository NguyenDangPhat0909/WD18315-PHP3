<?php

use App\Http\Controllers\phatndph39954Controller;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\productController;

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

Route::get('list-product', [productController::class, 'showProduct']);

//Truyền dữ liệu từ route -> Controller

// Slug
// http://127.0.0.1:8000/get-product/3/phat
Route::get('get-product/{id}/{name?}', [productController::class, 'getProduct']);

// Params
// http://127.0.0.1:8000/update-product?id=3&name=iphone
Route::get('update-product', [productController::class, 'updateProduct']);


// Lab 1: Tạo 1 view có nội dung là thông tin giới thiệu về bản thân sinh viên
// - Tạo controller là tên sinh viên rồi định nghĩa action để nạp view vừa tạo
// - Tạo route tên thongtinsv để chuyển vào action vừa tạo.
// - Định dạng css các view cho đẹp

Route::get('thongtinsv', [phatndph39954Controller::class, 'showThongTin']);