<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Car extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id', 'brand', 'model', 'year_fab', 'year_model', 'km', 'price', 'version', 'plate', 'model', 'status',
    ];

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function carPhoto() {
        return $this->hasMany(CarPhoto::class);
    }

    public function carItem() {
        return $this->hasOne(CarItem::class);
    }
}
