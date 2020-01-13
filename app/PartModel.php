<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * App\PartModel
 *
 * @property int $id
 * @property string $name
 * @property int|null $manufacturer_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \App\PartManufacturer|null $manufacturer
 * @method static bool|null forceDelete()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\PartModel newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\PartModel newQuery()
 * @method static \Illuminate\Database\Query\Builder|\App\PartModel onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\PartModel query()
 * @method static bool|null restore()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\PartModel whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\PartModel whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\PartModel whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\PartModel whereManufacturerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\PartModel whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\PartModel whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\PartModel withTrashed()
 * @method static \Illuminate\Database\Query\Builder|\App\PartModel withoutTrashed()
 * @mixin \Eloquent
 */
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
