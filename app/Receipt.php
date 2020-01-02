<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Receipt extends Model
{
    use SoftDeletes;

    public function parts() {
        return $this->morphToMany(Part::class, 'purchasable')
            ->withPivot('price', 'delivered');
    }

    public function order() {
        return $this->belongsTo(Order::class);
    }
}
