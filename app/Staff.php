<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * App\Staff
 *
 * @property int $id
 * @property int|null $branch_id
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \App\Branch|null $branch
 * @property-read \App\User $user
 * @method static bool|null forceDelete()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Staff newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Staff newQuery()
 * @method static \Illuminate\Database\Query\Builder|\App\Staff onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Staff query()
 * @method static bool|null restore()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Staff whereBranchId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Staff whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Staff whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Staff whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Staff whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Staff withTrashed()
 * @method static \Illuminate\Database\Query\Builder|\App\Staff withoutTrashed()
 * @mixin \Eloquent
 */
class Staff extends Model
{
    use SoftDeletes;

    public function user() {
        return $this->morphOne(User::class, 'userable');
    }

    public function branch() {
        return $this->belongsTo(Branch::class);
    }
}
