<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Part extends Model
{

  public function autos(){
    return $this->belongsTo(Auto::class,'car_id');
  }

  public function part_photos(){
      return $this->hasMany(Part_photo::class,'part_id');
    }

  public function categories(){
    return $this->belongsTo(Category::class,'cat_id');
  }
  public function getPhoto(){
    return Part_photo::where('part_id',$this->part_id)->first();
  }

  public function getCategory(){
    return Category::where('category_id',$this->cat_id)->first();
  }


}
