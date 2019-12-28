<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Enquiry extends Model
{
    //
    public function parts() {
        return $this->morphToMany(Part::class, 'purchasable');
    }

    public function partSummary() {
        return $this->parts()->take(3);
    }

    public function supplier() {
        return $this->belongsTo(Supplier::class);
    }

    public function user() {
        return $this->belongsTo(User::class);
    }
}
