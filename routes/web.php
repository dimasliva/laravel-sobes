<?php

use Illuminate\Support\Facades\Route;

Route::group(['namespace' => 'Post'], function () {
  Route::get('/', "IndexController")->name("post.index");
  Route::get('/create', "CreateController")->name("post.create");
  Route::post('/store', "StoreController")->name("post.store");
});