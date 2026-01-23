<?php

namespace App\Http\Controllers\Management;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Category;

use Illuminate\Http\Request;

class ProductManagerController extends Controller
{
    // 製品一覧画面の表示
    public function list()
    {
        // カテゴリを一緒に取得（N+1 対策）
        $products = Product::with('category')->get();
        return view('management.product_list', compact('products'));
    }

    // 製品追加画面の表示
    public function add()
    {
        // カテゴリ全体を取得
        $categories = Category::all();
        return view('management.product_add', compact('categories'));
    }

    // 製品加処理
    public function store(Request $request)
    {
        // バリデーション（最低限）
        $request->validate([
            'name' => 'required',
            'category_id' => 'required',
            'image' => 'required|image',
            'price' => 'required|integer',
            'description' => 'required',
        ]);

        // 画像保存
        $path = $request->file('image')->store('images', 'public');
        // → storage/app/public/images/xxx.jpg

        // DB保存
        Product::create([
            'name' => $request->name,
            'category_id' => $request->category_id,
            'image_path' => $path,   // images/xxx.jpg
            'price' => $request->price,
            'description' => $request->description,
        ]);

        // 一覧へリダイレクト
        return redirect()->route('management.products');
    }
}
