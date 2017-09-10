<?php

namespace Simoja\Laramin\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laratrust\Traits\LaratrustUserTrait;
use Simoja\Laramin\Facades\Laramin;

class User extends Authenticatable
{
    use Notifiable;
    use LaratrustUserTrait;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function toArray()
    {
        return array_merge(parent::toArray(), [
            'role' =>   laramin_each_user_role($this),
            'permission' => Laramin::getModelPermission($this)
         ]);
    }
}
