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
        <div class="form-group">
            <label class="form-label">商品画像</label>
            <input type="file" name="image" id="imageInput">
            <p class="current-image">現在の画像：{{ basename($product->image_path) }}</p>
        </div>

        {{-- プレビュー表示エリア --}}
        <div class="form-group">
            <img id="imagePreview"
                src="{{ asset('storage/' . $product->image_path) }}"
                class="image-preview">
        </div>

        {{-- 種類 --}}
        <div class="form-group">
            <label class="form-label">種類</label>
            <select name="category_id">
                @foreach($categories as $category)
                <option value="{{ $category->id }}"
                    {{ $category->id == $product->category_id ? 'selected' : '' }}>
                    {{ $category->name }}
                </option>
                @endforeach
            </select>
        </div>

        {{-- 商品名 --}}
        <div class="form-group">
            <label class="form-label">商品名</label>
            <input type="text" name="name" value="{{ $product->name }}">
        </div>

        {{-- 商品の説明 --}}
        <div class="form-group">
            <label class="form-label">商品の説明</label>
            <textarea name="description" rows="4" cols="40">{{ $product->description }}</textarea>
        </div>

        {{-- 価格 --}}
        <div class="form-group">
            <label class="form-label">価格</label>
            <input type="number" name="price" value="{{ $product->price }}">
        </div>

        {{-- 変更ボタン --}}
        <div class="form-group">
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