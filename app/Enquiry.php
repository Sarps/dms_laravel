<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * App\Enquiry
 *
 * @property int $id
 * @property int $supplier_id
 * @property int $user_id
 * @property string|null $due_date
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Part[] $parts
 * @property-read int|null $parts_count
 * @property-read \App\Supplier $supplier
 * @property-read \App\User $user
 * @method static bool|null forceDelete()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Enquiry newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Enquiry newQuery()
 * @method static \Illuminate\Database\Query\Builder|\App\Enquiry onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Enquiry query()
 * @method static bool|null restore()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Enquiry whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Enquiry whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Enquiry whereDueDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Enquiry whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Enquiry whereSupplierId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Enquiry whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Enquiry whereUserId($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Enquiry withTrashed()
 * @method static \Illuminate\Database\Query\Builder|\App\Enquiry withoutTrashed()
 * @mixin \Eloquent
 */
class Enquiry extends Model
{
    use SoftDeletes;

    public function parts() {
        return $this->morphToMany(Part::class, 'purchasable')
            ->withPivot('quantity');
    }

    public function partSummary() {
        return $this->parts();
    }

    public function supplier() {
        return $this->belongsTo(Supplier::class);
    }

    public function user() {
        return $this->belongsTo(User::class);
    }
}
