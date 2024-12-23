<?php
Route::get('/products', function () {
    $product = \App\Models\Product::join('category', 'product.category_id', '=', 'category.id')
        ->select('product.*', 'category.name as category')
        ->get();
    return response()->json($product);
});
Route::get('/product_detail', [\App\Http\Controllers\ProductController::class, 'getProductDetail']);
