<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Supplier extends Model
{

    use SoftDeletes;

    protected $fillable = [
        "name", "address", "contact"
    ];

    public function parts() {
        return $this->hasMany(Part::class);
    }
}
