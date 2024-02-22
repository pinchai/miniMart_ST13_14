<?php
Route::get('/user', function () {
    $user = \App\Models\User::all();
    return view('user.user', ['user'=>$user]);
})->name('user');

Route::get('/index_add_user', function () {
    return view('user.add');
})->name('index_add_user');

Route::post('/create_user', [\App\Http\Controllers\UserController::class, 'createUser'])
    ->name('create_user');

Route::get('/index_edit_user', [\App\Http\Controllers\UserController::class, 'indexUpdateUser'])
    ->name('index_edit_user');
Route::post('/update_user', [\App\Http\Controllers\UserController::class, 'updateUser'])
    ->name('update_user');

Route::post('/delete_user', [\App\Http\Controllers\UserController::class, 'deleteUser'])
    ->name('delete_user');
