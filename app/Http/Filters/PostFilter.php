<?php


namespace App\Http\Filters;


use Illuminate\Database\Eloquent\Builder;

class PostFilter extends FilterAbstract
{
  public const TITLE = 'title';
  public const CATEGORY_ID = 'category_id';


  protected function getCallbacks(): array
  {
    return [
        self::TITLE => [$this, 'title'],
        self::CATEGORY_ID => [$this, 'categoryId'],
    ];
  }

  public function title(Builder $builder, $value)
  {
    $builder->where('title', 'like', "%{$value}%");
  }

  public function categoryId(Builder $builder, $value)
  {
    $builder->where('category_id', $value);
  }
}