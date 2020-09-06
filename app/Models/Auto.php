<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Auto extends Model
{

    public function part(){
      return $this->hasMany(Part::class);
    }
    protected $table='autos';
}
