<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Products\ProductController;
use App\Http\Controllers\Management\ProductManagerController;

// トップページ
Route::get('/', [ProductController::class, 'index'])->name('products.index');

// 商品検索
Route::get('/search', [ProductManagerController::class, 'search'])->name('management.search');

// 商品管理  一覧画面 表示
Route::get('/list', [ProductManagerController::class, 'list'])->name('management.products');
// 商品管理  追加画面 表示
Route::get('/add', [ProductManagerController::class, 'add'])->name('management.products.add');
// 商品管理  追加画面 追加処理
Route::post('/store', [ProductManagerController::class, 'store'])->name('management.products.store');
