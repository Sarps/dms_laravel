<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * App\PartManufacturer
 *
 * @property int $id
 * @property string $name
 * @property string|null $location
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\PartModel[] $models
 * @property-read int|null $models_count
 * @method static bool|null forceDelete()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\PartManufacturer newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\PartManufacturer newQuery()
 * @method static \Illuminate\Database\Query\Builder|\App\PartManufacturer onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\PartManufacturer query()
 * @method static bool|null restore()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\PartManufacturer whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\PartManufacturer whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\PartManufacturer whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\PartManufacturer whereLocation($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\PartManufacturer whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\PartManufacturer whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\PartManufacturer withTrashed()
 * @method static \Illuminate\Database\Query\Builder|\App\PartManufacturer withoutTrashed()
 * @mixin \Eloquent
 */
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
