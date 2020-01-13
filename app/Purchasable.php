<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Purchasable
 *
 * @property int $id
 * @property string $purchasable_type
 * @property int $purchasable_id
 * @property int $part_id
 * @property int $quantity
 * @property int $delivered
 * @property float|null $price
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Purchasable newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Purchasable newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Purchasable query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Purchasable whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Purchasable whereDelivered($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Purchasable whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Purchasable wherePartId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Purchasable wherePrice($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Purchasable wherePurchasableId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Purchasable wherePurchasableType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Purchasable whereQuantity($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Purchasable whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Purchasable extends Model
{
    //
    protected $fillable = [
        "part_id", "purchasable_type", "purchasable_id"
    ];
}
