<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use App\Http\Requests\Post\StoreRequest;
use App\Models\Post;

class UpdateController extends Controller
{
    public function __invoke(StoreRequest $request, Post $post)
    {
      $data = $request->validated();
      $tags = $data['tags'];
      unset($data['tags']);
      $post->tags()->sync($tags);
      $post->update($data);
      return redirect()->route('post.show', $post->id);
    }
}
