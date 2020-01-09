<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable = [
        'account_name', 'name', 'address', 'mobile', 'telephone', 'account_type',
        'account_ref', 'credit_limit', 'tax_type', 'tax_perc', 'status', 'on_hold', 'stop_account'
    ];

    public function user()
    {
        return $this->morphOne(User::class, 'userable');
    }

    public function contact()
    {
        return $this->belongsTo(Staff::class, 'contact_person');
    }
}
