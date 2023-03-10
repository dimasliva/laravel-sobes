<?php

namespace App\Http\Controllers\Post;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;

class ShowController extends Controller
{
  public function __invoke($id)
  {
    $post = Post::find($id);
    $tags = $post->tags;
    $category = $post->category;
    return view('post.show', compact('post', 'category', 'tags'));
  }
}
