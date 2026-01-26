<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Products\ProductController;
use App\Http\Controllers\Management\ProductManagerController;

// トップページ
Route::get('/', [ProductController::class, 'index'])->name('products.index');

// 商品検索
Route::get('/search', [ProductManagerController::class, 'search'])->name('management.search');

Route::prefix('management/products')->group(
    function () {
        // 商品管理  一覧画面 表示
        Route::get('/', [ProductManagerController::class, 'list'])->name('management.products');

        // 商品管理  追加画面 表示
        Route::get('/create', [ProductManagerController::class, 'add'])->name('management.products.add');
        // 商品管理  追加画面 追加処理
        Route::post('/create', [ProductManagerController::class, 'store'])->name('management.products.store');

        // 商品管理  詳細画面 表示
        Route::get('/detail/{id}', [ProductManagerController::class, 'detail'])->name('management.products.detail');

        // 商品管理  変更画面 表示
        Route::get('/edit/{id}', [ProductManagerController::class, 'edit'])->name('management.products.edit');
        // 商品管理  変更処理
        Route::put('/update/{id}', [ProductManagerController::class, 'update'])->name('management.products.update');

        // 商品管理  削除処理
        Route::delete('/delete/{id}', [ProductManagerController::class, 'destroy'])->name('management.products.destroy');
    }
);
