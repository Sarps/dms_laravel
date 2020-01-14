<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * App\Vehicle
 *
 * @property int $id
 * @property int $customer_id
 * @property int $staff_id
 * @property string $reg_no
 * @property int $part_model_id
 * @property int $part_franchise_id
 * @property string $chasis_no
 * @property string $origin
 * @property string $engine_no
 * @property string $colour
 * @property string $odometer_unit
 * @property string $note
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \App\Customer $customer
 * @property-read \App\Staff $staff
 * @method static bool|null forceDelete()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Vehicle newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Vehicle newQuery()
 * @method static \Illuminate\Database\Query\Builder|\App\Vehicle onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Vehicle query()
 * @method static bool|null restore()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Vehicle whereChasisNo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Vehicle whereColour($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Vehicle whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Vehicle whereCustomerId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Vehicle whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Vehicle whereEngineNo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Vehicle whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Vehicle whereNote($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Vehicle whereOdometerUnit($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Vehicle whereOrigin($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Vehicle wherePartFranchiseId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Vehicle wherePartModelId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Vehicle whereRegNo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Vehicle whereStaffId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Vehicle whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Vehicle withTrashed()
 * @method static \Illuminate\Database\Query\Builder|\App\Vehicle withoutTrashed()
 * @mixin \Eloquent
 */
class Vehicle extends Model
{
    use SoftDeletes;

    protected $fillable = [
        'reg_no',
        'chasis_no',
        'engine_no',
        'origin',
        'colour',
        'odometer_unit',
        'customer_id',
        'staff_id',
        'part_model_id',
        'part_franchise_id',
        'note',
    ];

    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }

    public function staff()
    {
        return $this->belongsTo(Staff::class);
    }

    public function model () {
        return $this->belongsTo(PartModel::class, 'part_model_id');
    }

    public function franchise () {
        return $this->belongsTo(PartFranchise::class);
    }
}
