<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Spatie\MediaLibrary\HasMedia\HasMedia;
use Spatie\MediaLibrary\HasMedia\HasMediaTrait;

/**
 * App\Company
 *
 * @property int $id
 * @property string $name
 * @property string $address
 * @property string $contact
 * @property string|null $motto
 * @property string|null $skin
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @property \Illuminate\Support\Carbon|null $deleted_at
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Branch[] $branches
 * @property-read int|null $branches_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\Spatie\MediaLibrary\Models\Media[] $media
 * @property-read int|null $media_count
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\User[] $users
 * @property-read int|null $users_count
 * @method static bool|null forceDelete()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Company newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Company newQuery()
 * @method static \Illuminate\Database\Query\Builder|\App\Company onlyTrashed()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Company query()
 * @method static bool|null restore()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Company whereAddress($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Company whereContact($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Company whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Company whereDeletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Company whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Company whereMotto($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Company whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Company whereSkin($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Company whereUpdatedAt($value)
 * @method static \Illuminate\Database\Query\Builder|\App\Company withTrashed()
 * @method static \Illuminate\Database\Query\Builder|\App\Company withoutTrashed()
 * @mixin \Eloquent
 */
class Company extends Model implements HasMedia
{
    use HasMediaTrait, SoftDeletes;

    protected $fillable = [
        "name", "address", "contact", "motto", "skin"
    ];

    public function branches() {
        return $this->hasMany(Branch::class);
    }

    public function users() {
        return $this->hasMany(User::class);
    }

    public function customers() {
        return $this->users()->where('userable_type', Customer::class);
    }

    public function staff() {
        return $this->users()->where('userable_type', Staff::class);
    }
}
