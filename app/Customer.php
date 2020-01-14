<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Customer
 *
 * @property int $id
 * @property string $account_name
 * @property int|null $contact_person
 * @property string $address
 * @property string $mobile
 * @property string $telephone
 * @property string $account_type
 * @property string $account_ref
 * @property float $credit_limit
 * @property string $tax_type
 * @property float $tax_perc
 * @property string $status
 * @property int|null $stop_account
 * @property int|null $on_hold
 * @property string|null $comments
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property string|null $deleted_at
 * @property-read \App\Staff|null $contact
 * @property-read \App\User $user
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Customer newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Customer newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Customer query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Customer whereAccountName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Customer whereAccountRef($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Customer whereAccountType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Customer whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Customer whereComments($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Customer whereContactPerson($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Customer whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Customer whereCreditLimit($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Customer whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Customer whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Customer whereMobile($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Customer whereOnHold($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Customer whereStatus($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Customer whereStopAccount($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Customer whereTaxPerc($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Customer whereTaxType($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Customer whereTelephone($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Customer whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Customer extends Model
{
    protected $fillable = [
        'account_name', 'name', 'address', 'mobile', 'telephone', 'account_type',
        'account_ref', 'credit_limit', 'tax_type', 'tax_perc', 'status', 'on_hold', 'stop_account'
    ];

    public function user()
    {
        return $this->morphOne(User::class, 'userable');
    }

    public function vehicles() {
        return $this->hasMany(Vehicle::class);
    }

    public function contact()
    {
        return $this->belongsTo(Staff::class, 'contact_person');
    }
}
