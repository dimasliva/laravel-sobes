<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Http\Controllers\Seeders\SeedTrait;
use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
  use SeedTrait;
  /**
   * Seed the application's database.
   *
   * @return void
   */
  public function run()
  {
    Category::factory(20)->create();
    Post::factory(10)->create();
    Tag::factory(30)->create();
    $tags = Tag::all();
    $numbs = rand(1, 30);
    $start_index = 0;
    $numbers = [];
    Post::all()->each(function ($post) use ($tags, $numbers, $numbs, $start_index) {
      $post->tags()->attach(
          $this->addTags($numbs, $numbers, $tags, $start_index)
      );
    });
  }
}
