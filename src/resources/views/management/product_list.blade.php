@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/product_list.css') }}">
@endsection

@section('content')

<h1>商品一覧（管理画面）</h1>

<table border="1">
    <thead>
        <tr>
            <th>種類</th>
            <th>商品画像</th>
            <th>商品名</th>
            <th>価格</th>
            <th>説明</th>
        </tr>
    </thead>
    <tbody>
        @foreach($products as $product)
        <tr>
            <td>{{ $product->category->name }}</td>
            <td>
                <img src="{{ asset('storage/' . $product->image_path) }}" width="100">
            </td>
            <td>{{ $product->name }}</td>
            <td>¥{{ number_format($product->price) }}</td>
            <td>{{ $product->description }}</td>
        </tr>
        @endforeach
    </tbody>
</table>

</div>
@endsection