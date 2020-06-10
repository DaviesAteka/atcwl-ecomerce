<?php

namespace App;


use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
  protected $fillable = ['quantity'];
  
  
  public function categories()
  {
      return $this->belongsToMany('App\Category');
  }
    public function scopeMightAlsoLike($query)
    {
        return $query->inRandomOrder()->take(5);
    }
    
    
    public function presentPrice()
    {
        return 'ksh'.number_format($this->price / 100, 2);
    }
     


}
