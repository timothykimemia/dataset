<?php

namespace App\Models\Activity;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;

class Activity extends Model
{
    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'activity';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'uid', 'activity'
    ];

    /**
     * The "booting" method of the model.
     *
     * @return void
     */
    protected static function boot()
    {
        parent::boot();

        static::creating(function ($activity) {
            $activity->uid = str_random(10);
        });
    }

    /******************************************************************************************************************/

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /******************************************************************************************************************/
}
