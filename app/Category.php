<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
  // change the table name to below sudo change
  
  protected $table = 'category'; 

  public function products()
  {
  return $this->belongsToMany('App\Product');
  }

  
}

