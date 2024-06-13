<?php
Route::get('admin/category', function () {
    $category = \App\Models\Category::all();

    return view('category.category', ['category'=>$category]);
})->name('category');

Route::get('admin/index_add_category', function () {
    return view('category.add');
})->name('index_add_category');

Route::post('admin/create_category', [\App\Http\Controllers\CategoryController::class, 'createCategory'])
    ->name('create_category');

Route::get('admin/index_edit_category', [\App\Http\Controllers\CategoryController::class, 'indexUpdateCategory'])
    ->name('index_edit_category');
Route::post('admin/update_category', [\App\Http\Controllers\CategoryController::class, 'updateCategory'])
    ->name('update_category');

Route::post('admin/delete_category', [\App\Http\Controllers\CategoryController::class, 'deleteCategory'])
    ->name('delete_category');
