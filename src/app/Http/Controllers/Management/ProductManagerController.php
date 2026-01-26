<?php

namespace App\Http\Controllers\Management;

use App\Http\Controllers\Controller;
use App\Models\Product;
use App\Models\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductManagerController extends Controller
{
    // 一覧画面の表示
    public function list()
    {
        // カテゴリを一緒に取得（N+1 対策）
        $products = Product::with('category')->get();
        return view('management.product_list', compact('products'));
    }

    // 追加画面の表示
    public function add()
    {
        // カテゴリ全体を取得
        $categories = Category::all();
        return view('management.product_add', compact('categories'));
    }
    // 追加処理
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

    // 詳細画面の表示
    public function detail($id)
    {
        // カテゴリを一緒に取得
        $product = Product::with('category')->findOrFail($id);
        return view('management.product_detail', compact('product'));
    }

    // 変更画面の表示
    public function edit($id)
    {
        // カテゴリを一緒に取得
        $product = Product::with('category')->findOrFail($id);
        $categories = Category::all();
        return view('management.product_edit', compact('product', 'categories'));
    }
    // 変更処理
    public function update(Request $request)
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
        Product::find($request->id)->update([
            'name' => $request->name,
            'category_id' => $request->category_id,
            'image_path' => $path,   // images/xxx.jpg
            'price' => $request->price,
            'description' => $request->description,
        ]);

        // 一覧へリダイレクト
        return redirect()->route('management.products');
    }

    // 削除処理
    public function destroy($id)
    {
        $product = Product::findOrFail($id);
        // DB削除
        $product->delete();
        return redirect()->route('management.products');
    }
}
