@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/product_detail.css') }}">
@endsection

@section('content')

<div class="product-detail-container">

    <h1>商品詳細</h1>

    {{-- 商品画像 --}}
    <div>
        <img src="{{ asset('storage/' . $product->image_path) }}" width="300">
    </div>

    <br>

    {{-- 種類 --}}
    <div>
        <strong>種類：</strong>
        {{ $product->category->name }}
    </div>

    <br>

    {{-- 商品名 --}}
    <div>
        <strong>商品名：</strong>
        {{ $product->name }}
    </div>

    <br>

    {{-- 価格 --}}
    <div>
        <strong>価格：</strong>
        ¥{{ number_format($product->price) }}
    </div>

    <br>

    {{-- 説明 --}}
    <div>
        <strong>説明：</strong>
        {{ $product->description }}
    </div>

    <br><br>
    
</div>

@endsection