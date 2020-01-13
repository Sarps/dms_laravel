<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\MeasurementUnit
 *
 * @property int $id
 * @property string $name
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\MeasurementUnit newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\MeasurementUnit newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\MeasurementUnit query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\MeasurementUnit whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\MeasurementUnit whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\MeasurementUnit whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\MeasurementUnit whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class MeasurementUnit extends Model
{
    //
    protected $fillable = ['name'];
}
