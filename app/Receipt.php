<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * App\Receipt
 *
 * @property int $id
 * @property int $order_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \App\Order $order
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Part[] $parts
 * @property-read int|null $parts_count
 * @method static bool|null forceDelete()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Receipt newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Receipt newQuery()
 * @method static \Illuminate\Database\Query\Builder|\App\Receipt onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Receipt query()
 * @method static bool|null restore()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Receipt whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Receipt whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Receipt whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Receipt whereOrderId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Receipt whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Receipt withTrashed()
 * @method static \Illuminate\Database\Query\Builder|\App\Receipt withoutTrashed()
 * @mixin \Eloquent
 */
class Receipt extends Model
{
    use SoftDeletes;

    public function parts() {
        return $this->morphToMany(Part::class, 'purchasable')
            ->withPivot('price', 'delivered');
    }

    public function order() {
        return $this->belongsTo(Order::class);
    }
}
