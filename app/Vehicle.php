<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Vehicle extends Model
{
    use SoftDeletes;

    public function customer() {
        return $this->belongsTo(Customer::class);
    }

    public function staff() {
        return $this->belongsTo(Staff::class);
    }
}
