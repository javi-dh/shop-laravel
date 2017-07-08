<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Category;

class Product extends Model
{
    protected $guarded = [];

    public function getPriceAttribute($value)
    {
        return $value / 100;
    }

    public function priceText()
    {
        return $this->price . ' $';
    }

    public function category()
    {
      return $this->belongsTo(Category::class);
    }
}
