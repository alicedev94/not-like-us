<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function () {
    return "List users";
});
Route::get('/user/{id}', function ($id) {
    return "User $id";
});

Route::post('/user', function () {
    return "Create user";
});

Route::put('/user/{id}', function ($id) {
    return "Update user $id";
});

Route::delete('/user/{id}', function ($id) {
    return "Delete user $id";
});
