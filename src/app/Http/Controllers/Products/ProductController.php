<?php

namespace App\Http\Controllers\Products;

use Illuminate\Support\Facades\File;
use App\Http\Controllers\Controller;

class ProductController extends Controller
{
    public function index()
    {
        $path = storage_path('app/public/gift_set');
        $files = File::files($path);

        $products = collect($files)->map(function ($file) {
            return [
                'name'  => pathinfo($file->getFilename(), PATHINFO_FILENAME),
                'image' => 'storage/gift_set/' . $file->getFilename(),
            ];
        });

        return view('products.products', compact('products'));
    }
}
