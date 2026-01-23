@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/product_list.css') }}">
@endsection

@section('content')

<h1>商品一覧</h1>

<div class="btn-add-area">
    <a href="{{ route('management.products.add') }}" class="btn-add">
        商品追加
    </a>
</div>

<table border="1">
    <thead>
        <tr>
            <th>種類</th>
            <th>商品画像</th>
            <th>商品名</th>
            <th>価格</th>
            <th>説明</th>
            <th>削除</th>
            <th>変更</th>
        </tr>
    </thead>
    <tbody>
        @foreach($products as $product)
        <tr>
            {{-- 種類 --}}
            <td>{{ $product->category->name }}</td>

            {{-- 製品画像 --}}
            <td>
                <a href="{{ route('management.products.detail', $product->id) }}">
                    <img src="{{ asset('storage/' . $product->image_path) }}" width="100">
                </a>
            </td>

            {{-- 製品名 --}}
            <td>
                <a href="{{ route('management.products.detail', $product->id) }}">
                    {{ $product->name }}
                </a>
            </td>

            {{-- 価格 --}}
            <td>¥{{ number_format($product->price) }}</td>

            {{-- 説明 --}}
            <td>{{ $product->description }}</td>

            {{-- [削除]ボタン --}}
            <td>
                <form action="{{ route('management.products.destroy', $product->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit">削除</button>
                </form>
            </td>
            
            {{-- [変更]ボタン --}}
            <td>
                <a href="{{ route('management.products.edit', $product->id) }}">
                    変更
                </a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection