@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/product_edit.css') }}">
@endsection

@section('content')

<div class="product-edit-container">
    <h1>商品変更</h1>

    <form action="{{ route('management.products.update', $product->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')

        {{-- 商品画像 --}}
        <div>
            <label>商品画像</label><br>
            <input type="file" name="image" id="imageInput">
            <p>現在の画像：{{ basename($product->image_path) }}</p>
        </div>

        {{-- プレビュー表示エリア --}}
        <div>
            <img id="imagePreview"
                src="{{ asset('storage/' . $product->image_path) }}"
                style="max-width:200px;">
        </div>

        <br>

        {{-- 種類 --}}
        <div>
            <label>種類</label><br>
            <select name="category_id">
                @foreach($categories as $category)
                <option value="{{ $category->id }}"
                    {{ $category->id == $product->category_id ? 'selected' : '' }}>
                    {{ $category->name }}
                </option>
                @endforeach
            </select>
        </div>

        <br>

        {{-- 商品名 --}}
        <div>
            <label>商品名</label><br>
            <input type="text" name="name" value="{{ $product->name }}">
        </div>

        <br>

        {{-- 商品の説明 --}}
        <div>
            <label>商品の説明</label><br>
            <textarea name="description" rows="4" cols="40">{{ $product->description }}</textarea>
        </div>

        <br>

        {{-- 価格 --}}
        <div>
            <label>価格</label><br>
            <input type="number" name="price" value="{{ $product->price }}">
        </div>

        <br>

        {{-- 変更ボタン --}}
        <div>
            <button type="submit">商品を変更する</button>
        </div>

    </form>
</div>

{{-- 画像プレビュー用JS --}}
<script>
    document.getElementById('imageInput').addEventListener('change', function(e) {
        const file = e.target.files[0];
        if (!file) return;

        const reader = new FileReader();
        reader.onload = function(event) {
            const img = document.getElementById('imagePreview');
            img.src = event.target.result;
            img.style.display = 'block';
        };
        reader.readAsDataURL(file);
    });
</script>

@endsection