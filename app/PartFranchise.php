<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * App\PartFranchise
 *
 * @property int $id
 * @property string $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @method static bool|null forceDelete()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\PartFranchise newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\PartFranchise newQuery()
 * @method static \Illuminate\Database\Query\Builder|\App\PartFranchise onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\PartFranchise query()
 * @method static bool|null restore()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\PartFranchise whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\PartFranchise whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\PartFranchise whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\PartFranchise whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\PartFranchise whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\PartFranchise withTrashed()
 * @method static \Illuminate\Database\Query\Builder|\App\PartFranchise withoutTrashed()
 * @mixin \Eloquent
 */
class PartFranchise extends Model
{
    use SoftDeletes;

    protected $hidden = [
        "created_at", "updated_at"
    ];
}
