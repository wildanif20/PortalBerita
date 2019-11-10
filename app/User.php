<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Role;

class User extends Authenticatable
{
    use Notifiable;

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

    //Relation
    public function roles(){
        return $this->belongsToMany(Role::class);
    }

    //Authorized
    public function authorizeRoles($role)
    {
        if (is_array($role)){
            return $this->hasAnyRole($role) || abort(401, 'This action unauthorized');
        }
        return $this->hasRole($role) || abort(401, 'This action unauthorized');
    }
    
    public function hasAnyRole($role)
    {
        return null !== $this->roles()->whereIn('name', $role)->first();
    }

    public function hasRole($role){
        return null !== $this->roles()->where('name', $role)->first();
    }
}
