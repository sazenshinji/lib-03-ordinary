<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Products\ProductController;
use App\Http\Controllers\Management\ProductManagerController;

// トップページ
Route::get('/', [ProductController::class, 'index'])->name('products.index');

// 商品検索
Route::get('/search', [ProductManagerController::class, 'search'])->name('management.search');

// 商品管理機能
Route::prefix('management/products')->group(
    function () {
        // 一覧画面 表示
        Route::get('/', [ProductManagerController::class, 'list'])->name('management.products');


        // 追加　画面表示
        Route::get('/create', [ProductManagerController::class, 'add'])->name('management.products.add');
        // 追加 処理
        Route::post('/create', [ProductManagerController::class, 'store'])->name('management.products.store');


        // 詳細 画面表示
        Route::get('/detail/{id}', [ProductManagerController::class, 'detail'])->name('management.products.detail');


        // 削除 処理
        Route::delete('/delete/{id}', [ProductManagerController::class, 'destroy'])->name('management.products.destroy');


        // 変更 画面表示
        Route::get('/update/{id}', [ProductManagerController::class, 'edit'])->name('management.products.edit');
        // 変更 処理
        Route::put('/update/{id}', [ProductManagerController::class, 'update'])->name('management.products.update');
    }
);
