<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    public function part(){
      return $this->hasMany(Part::class);
    }
}
