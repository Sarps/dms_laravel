<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class PartManufacturer extends Model
{
    use SoftDeletes;

    protected $hidden = [
        "created_at", "updated_at"
    ];

    public function models() {
        return $this->hasMany(PartModel::class, 'manufacturer_id');
    }
}
