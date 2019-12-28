<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Company extends Model
{
    protected $fillable = [
        "name", "address", "contact", "motto", "skin"
    ];

    public function branches() {
        return $this->hasMany(Branch::class);
    }
}
