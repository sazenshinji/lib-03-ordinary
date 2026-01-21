<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Products\ProductController;
use App\Http\Controllers\Management\ProductManagerController;

// トップページ
Route::get('/', [ProductController::class, 'index'])->name('products.index');

// 商品管理一覧
Route::get('/list', [ProductManagerController::class, 'list'])->name('management.products');
