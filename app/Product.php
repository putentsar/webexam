<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
	  public $timestamps = false;
   public function product()
  {
	  return $this->belongsToMany(Dish::class);
	  
  }
}
