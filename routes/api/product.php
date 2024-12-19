<?php
Route::get('/products', function () {
    $product = \App\Models\Product::join('category', 'product.category_id', '=', 'category.id')
        ->select('product.*', 'category.name as category')
        ->get();
    return response()->json($product);
});
Route::post('/create_product', [\App\Http\Controllers\ProductController::class, 'createProduct']);
Route::post('/update_product', [\App\Http\Controllers\ProductController::class, 'updateProduct']);
Route::get('/delete_product', [\App\Http\Controllers\ProductController::class, 'deleteProduct']);
