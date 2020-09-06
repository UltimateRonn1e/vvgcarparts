<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Part_photo extends Model
{
  public function parts(){
    return $this->belongsTo(Part::class,'part_id');
  }
}
