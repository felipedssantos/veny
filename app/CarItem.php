<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CarItem extends Model
{
    public function car() {
        return $this->belongsTo(Car::class);
    }
}
