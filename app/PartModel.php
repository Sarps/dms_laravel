<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PartModel extends Model
{
    use SoftDeletes;

    protected $hidden = [
        "created_at", "updated_at"
    ];

    public function manufacturer() {
        return $this->belongsTo(PartManufacturer::class, 'manufacturer_id');
    }
}
