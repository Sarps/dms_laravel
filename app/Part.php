<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\MediaLibrary\HasMedia\HasMedia;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;

/**
 * App\Part
 *
 * @property int $id
 * @property int $number
 * @property string $name
 * @property float $retail_price
 * @property float $cost_price
 * @property int $category_id
 * @property int $manufacturer_id
 * @property int $model_id
 * @property int|null $franchise_id
 * @property int|null $supplier_id
 * @property int $quantity
 * @property int|null $reorder
 * @property string|null $description
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \App\Category $category
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Enquiry[] $enquiries
 * @property-read int|null $enquiries_count
 * @property-read \App\PartFranchise|null $franchise
 * @property-read \Spatie\MediaLibrary\Models\Media $image
 * @property-read \App\PartManufacturer $manufacturer
 * @property-read \Illuminate\Database\Eloquent\Collection|\Spatie\MediaLibrary\Models\Media[] $media
 * @property-read int|null $media_count
 * @property-read \App\PartModel $model
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Order[] $orders
 * @property-read int|null $orders_count
 * @property-read \App\Supplier|null $supplier
 * @method static bool|null forceDelete()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Part newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Part newQuery()
 * @method static \Illuminate\Database\Query\Builder|\App\Part onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Part query()
 * @method static bool|null restore()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Part whereCategoryId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Part whereCostPrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Part whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Part whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Part whereDescription($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Part whereFranchiseId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Part whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Part whereManufacturerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Part whereModelId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Part whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Part whereNumber($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Part whereQuantity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Part whereReorder($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Part whereRetailPrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Part whereSupplierId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Part whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Part withTrashed()
 * @method static \Illuminate\Database\Query\Builder|\App\Part withoutTrashed()
 * @mixin \Eloquent
 */
class Part extends Model implements HasMedia
{
    use HasMediaTrait, SoftDeletes;

    protected $fillable = [
        'number', 'name', 'retail_price', 'cost_price', 'category_id', 'supplier_id',
        'manufacturer_id', 'model_id', 'franchise_id', 'quantity', 'reorder',
        'description'
    ];

    protected $hidden = [
        "manufacturer_id", "model_id", "franchise_id", "category_id", "supplier_id"
    ];

    public function image() {
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
