<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Purchasable extends Model
{
    //
    protected $fillable = [
        "part_id", "purchasable_type", "purchasable_id"
    ];
}
