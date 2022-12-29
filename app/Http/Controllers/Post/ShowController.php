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
      $tags = Tag::all();
//      $tags = $post->tags();
      $category = Category::find($post->category_id);
        return view('post.show', compact('post', 'category', 'tags'));
    }
}
