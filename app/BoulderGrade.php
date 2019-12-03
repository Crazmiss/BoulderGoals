<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\BoulderGrade
 *
 * @property int $id
 * @property string $name
 * @method static \Illuminate\Database\Eloquent\Builder|\App\BoulderGrade newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\BoulderGrade newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\BoulderGrade query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\BoulderGrade whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\BoulderGrade whereName($value)
 * @mixin \Eloquent
 */
class BoulderGrade extends Model
{
    public $timestamps = false;
}
