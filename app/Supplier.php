<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * App\Supplier
 *
 * @property int $id
 * @property string $name
 * @property string $address
 * @property string $contact
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Part[] $parts
 * @property-read int|null $parts_count
 * @method static bool|null forceDelete()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Supplier newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Supplier newQuery()
 * @method static \Illuminate\Database\Query\Builder|\App\Supplier onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Supplier query()
 * @method static bool|null restore()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Supplier whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Supplier whereContact($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Supplier whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Supplier whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Supplier whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Supplier whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Supplier whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Supplier withTrashed()
 * @method static \Illuminate\Database\Query\Builder|\App\Supplier withoutTrashed()
 * @mixin \Eloquent
 */
class Supplier extends Model
{

    use SoftDeletes;

    protected $fillable = [
        "name", "address", "contact"
    ];

    public function parts() {
        return $this->hasMany(Part::class);
    }
}
