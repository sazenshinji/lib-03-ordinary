<?php

namespace App\Http\Controllers\Management;

use App\Http\Controllers\Controller;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductManagerController extends Controller
{
    public function list()
    {
        // カテゴリを一緒に取得（N+1 対策）
        $products = Product::with('category')->get();

        return view('management.product_list', compact('products'));
    }
}
