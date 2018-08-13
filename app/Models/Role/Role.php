<?php

namespace App\Models\Role;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;

class Role extends Model
{
    /**
     * The connection name for the model.
     *
     * @var string
     */
    protected $connection = 'role';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name'
    ];

    /******************************************************************************************************************/

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsToMany
     */
    public function users()
    {
        return $this->belongsToMany(User::class, 'users_roles');
    }

    /******************************************************************************************************************/
}
