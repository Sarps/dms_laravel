<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * App\BackOrder
 *
 * @property int $id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static bool|null forceDelete()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\BackOrder newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\BackOrder newQuery()
 * @method static \Illuminate\Database\Query\Builder|\App\BackOrder onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\BackOrder query()
 * @method static bool|null restore()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\BackOrder whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\BackOrder whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\BackOrder whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\BackOrder withTrashed()
 * @method static \Illuminate\Database\Query\Builder|\App\BackOrder withoutTrashed()
 * @mixin \Eloquent
 */
class BackOrder extends Model
{
    use SoftDeletes;
}
