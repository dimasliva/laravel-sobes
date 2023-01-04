<?php


namespace App\Http\Controllers\Seeders;


trait SeedTrait
{
  function addTags($numbs, $numbers, $tags, $start_index = 0) {
    for ($i = $start_index; $i < $numbs; $i++) {
      $tag = $tags->random(1, 30)->pluck('id')->toArray()[0];
      if (in_array($tag, $numbers)) {
        return $this->addTags($numbs, $numbers, $tags, $i);
      }
      array_push($numbers, $tag);
    }
    return $numbers;
  }
}