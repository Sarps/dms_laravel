<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\MediaLibrary\HasMedia\HasMedia;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;

class Company extends Model implements HasMedia
{
    use HasMediaTrait, SoftDeletes;

    protected $fillable = [
        "name", "address", "contact", "motto", "skin"
    ];

    public function branches() {
        return $this->hasMany(Branch::class);
    }

    public function users() {
        return $this->hasMany(User::class);
    }
}
