<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PartFranchise extends Model
{
    use SoftDeletes;

    protected $hidden = [
        "created_at", "updated_at"
    ];
}
