<?php

use Illuminate\Support\Facades\Route;

Route::group(['namespace' => 'Post'], function () {
  Route::get('/', "IndexController")->name("post.index");
  Route::get('/create', "CreateController")->name("post.create");
  Route::post('/store', "StoreController")->name("post.store");
  Route::post('/post/{post}', "UpdateController")->name("post.update");
  Route::get('/post/{id}', "ShowController")->name("post.show");
  Route::get('/post/{id}/edit', "EditController")->name("post.edit");
});
