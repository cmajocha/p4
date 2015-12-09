<?php

namespace p4;

use Illuminate\Auth\Authenticatable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Auth\Passwords\CanResetPassword;
use Illuminate\Foundation\Auth\Access\Authorizable;
use Illuminate\Contracts\Auth\Authenticatable as AuthenticatableContract;
use Illuminate\Contracts\Auth\Access\Authorizable as AuthorizableContract;
use Illuminate\Contracts\Auth\CanResetPassword as CanResetPasswordContract;

class User extends Model implements AuthenticatableContract,
                                    AuthorizableContract,
                                    CanResetPasswordContract


{
    public function teammember()
      {
        # User has many Teammembers
        # Define a one-to-many relationship.
        return $this->hasMany('\p4\Teammembers');
      }


      public function getUsersForDropdown() {
       $users = $this->orderby('name','ASC')->get();
       $users_for_dropdown = [];
       foreach($users as $user) {
           $users_for_dropdown[$user->id] = $user->name.', '.$user->email;
       }
       return $users_for_dropdown;
   }

    use Authenticatable, Authorizable, CanResetPassword;

    /**
     * The database table used by the model.
     *
     * @var string
     */
    protected $table = 'users';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'email', 'password'];

    /**
     * The attributes excluded from the model's JSON form.
     *
     * @var array
     */
    protected $hidden = ['password', 'remember_token'];
}
