<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Dish extends Model
{
	  public $timestamps = false;
  public function category()
  {
	  return $this->belongsTo(Category::class);
  }
  
   public function product()
  {
	  return $this->belongsToMany(Product::class, 'dish_products')->withPivot('amount');
	  
  }
  
  }
