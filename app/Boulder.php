<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Boulder
 *
 * @package App
 * @property 
 * @property int $id
 * @property int $user_id
 * @property int $boulder_grade_id
 * @property string|null $completed_at
 * @property int|null $tries
 * @property string|null $notes
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Boulder newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Boulder newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Boulder query()
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Boulder whereBoulderGradeId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Boulder whereCompletedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Boulder whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Boulder whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Boulder whereNotes($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Boulder whereTries($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Boulder whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Boulder whereUserId($value)
 * @mixin \Eloquent
 */
class Boulder extends Model
{
    //
}
