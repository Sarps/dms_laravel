<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Staff extends Model
{
    use SoftDeletes;

    public function user() {
        return $this->morphOne(User::class, 'userable');
    }

    public function branch() {
        return $this->belongsTo(Branch::class);
    }
}
