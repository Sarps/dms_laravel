<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia\HasMedia;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;

class Part extends Model implements HasMedia
{
    use HasMediaTrait;

    protected $fillable = [
        'number', 'name', 'retail_price', 'cost_price', 'category_id',
        'manufacturer_id', 'model_id', 'franchise_id', 'quantity', 'reorder',
        'description'
    ];

    protected $hidden = [
        "manufacturer_id", "model_id", "franchise_id", "category_id", "supplier_id"
    ];

    public function media() {
        return $this->morphOne(config('medialibrary.media_model'), 'model');
    }

    public function manufacturer() {
        return $this->belongsTo(PartManufacturer::class, "manufacturer_id");
    }

    public function model() {
        return $this->belongsTo(PartModel::class, "model_id");
    }

    public function franchise() {
        return $this->belongsTo(PartFranchise::class, 'franchise_id');
    }

    public function category() {
        return $this->belongsTo(Category::class, "category_id");
    }

    public function supplier() {
        return $this->belongsTo(Supplier::class);
    }

    public function enquiries()
    {
        return $this->morphedByMany(Enquiry::class, 'purchasable');
    }

    public function orders()
    {
        return $this->morphedByMany(Order::class, 'purchasable');
    }
}
