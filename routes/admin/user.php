<?php
Route::get('admin/user', function () {
    $user = \App\Models\User::whereNotIn('id',[auth()->user()->id])
        ->get();

    return view('user.user', ['user'=>$user]);
})->name('user');

Route::get('admin/index_add_user', function () {
    return view('user.add');
})->name('index_add_user');

Route::post('admin/create_user', [\App\Http\Controllers\UserController::class, 'createUser'])
    ->name('create_user');

Route::get('admin/index_edit_user', [\App\Http\Controllers\UserController::class, 'indexUpdateUser'])
    ->name('index_edit_user');
Route::post('admin/update_user', [\App\Http\Controllers\UserController::class, 'updateUser'])
    ->name('update_user');

Route::post('admin/delete_user', [\App\Http\Controllers\UserController::class, 'deleteUser'])
    ->name('delete_user');
