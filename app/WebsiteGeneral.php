<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

/**
 * App\WebsiteGeneral
 *
 * @property int $id
 * @property string $counter1_name
 * @property int $counter1_value
 * @property string $counter2_name
 * @property int $counter2_value
 * @property string $counter3_name
 * @property int $counter3_value
 * @property string $who_we_are
 * @property string $mission
 * @property string $processes
 * @property string $how_we_work
 * @property string $what_we_do
 * @property \Carbon\Carbon|null $created_at
 * @property \Carbon\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|\App\WebsiteGeneral whereCounter1Name($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\WebsiteGeneral whereCounter1Value($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\WebsiteGeneral whereCounter2Name($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\WebsiteGeneral whereCounter2Value($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\WebsiteGeneral whereCounter3Name($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\WebsiteGeneral whereCounter3Value($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\WebsiteGeneral whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\WebsiteGeneral whereHowWeWork($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\WebsiteGeneral whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\WebsiteGeneral whereMission($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\WebsiteGeneral whereProcesses($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\WebsiteGeneral whereUpdatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\WebsiteGeneral whereWhatWeDo($value)
 * @method static \Illuminate\Database\Eloquent\Builder|\App\WebsiteGeneral whereWhoWeAre($value)
 * @mixin \Eloquent
 */
class WebsiteGeneral extends Model
{
    protected $table = 'website_generals';

    protected $fillable  = [
        'counter1_name', 'counter1_value','counter2_name','counter2_value','counter3_name','counter3_value','who_we_are','mission','processes','how_we_work','what_we_do'
    ];
}
