<?php
Route::get('admin/product', function () {
    $product = \App\Models\Product::join('category', 'product.category_id', '=', 'category.id')
        ->select('product.*', 'category.name as category_name')
        ->get();

    return view('product.product', [
        'product'=>$product,
    ]);
})->name('product');

Route::get('admin/index_add_product', function () {
    return view('product.add', [
        'category' => \App\Models\Category::all(),
    ]);
})->name('index_add_product');

Route::post('admin/create_product', [\App\Http\Controllers\ProductController::class, 'createProduct'])
    ->name('create_product');

Route::get('admin/index_edit_product', [\App\Http\Controllers\ProductController::class, 'indexUpdateProduct'])
    ->name('index_edit_product');

Route::post('admin/update_product', [\App\Http\Controllers\ProductController::class, 'updateProduct'])
    ->name('update_product');

Route::get('admin/delete_product', [\App\Http\Controllers\ProductController::class, 'deleteProduct'])
    ->name('delete_product');
