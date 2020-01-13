<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * App\Preference
 *
 * @property int $id
 * @property string $preferable_type
 * @property int $preferable_id
 * @property string $key
 * @property string $value
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @method static bool|null forceDelete()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Preference newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Preference newQuery()
 * @method static \Illuminate\Database\Query\Builder|\App\Preference onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Preference query()
 * @method static bool|null restore()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Preference whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Preference whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Preference whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Preference whereKey($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Preference wherePreferableId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Preference wherePreferableType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Preference whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Preference whereValue($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Preference withTrashed()
 * @method static \Illuminate\Database\Query\Builder|\App\Preference withoutTrashed()
 * @mixin \Eloquent
 */
class Preference extends Model
{
    use SoftDeletes;
}
