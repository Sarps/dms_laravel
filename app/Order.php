<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Order extends Model
{
    use SoftDeletes;

    protected $fillable = [
        "type", "due_date"
    ];

    public function parts() {
        return $this->morphToMany(Part::class, 'purchasable')
            ->withPivot('quantity', 'price', 'delivered');
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

    public function receipts() {
        return $this->hasMany(Receipt::class);
    }
}
