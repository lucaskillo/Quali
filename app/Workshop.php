<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\Workshop
 *
 * @property int $id
 * @property string $name
 * @property string $date
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Workshop whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Workshop whereDate($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Workshop whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Workshop whereName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\Workshop whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Workshop extends Model
{
    protected $table = 'workshops';

    protected $fillable  = [
        'name', 'date'
    ];
}
