<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'firstname', 'middlename', 'lastname','username', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function personal_information(){
        return $this->hasOne('App\PersonalInformation');
    }

    public function contact_information(){
        return $this->hasOne('App\ContactInformation');
    }

    public function work_information(){
        return $this->hasOne('App\WorkInformation');
    }

    public function location_information(){
        return $this->hasOne('App\LocationInformation');
    }

    public function profile_image(){
        return $this->hasOne('App\ProfileImage');
    }

}
