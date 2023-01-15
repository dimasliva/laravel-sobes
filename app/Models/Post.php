<?php

namespace App\Models;

use App\Models\Traits\Filterable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;
    use Filterable;

    protected $guarded = [];

  public function tags() {
        return $this->belongsToMany(Tag::class, 'post_tags');
    }
  public function category() {
    return $this->belongsTo(Category::class);
  }
}
