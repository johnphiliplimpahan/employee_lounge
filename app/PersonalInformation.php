<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PersonalInformation extends Model
{
    protected $table = "personal_informations";
    
    public $primaryKey = "personalInfo_id";
    public $timestamps = true;

    protected $fillable = [
        'user_id', 'firstname', 'middlename','lastname', 'gender','dob'
    ];

    public function user(){
        return $this->belongsTo('App\User');
    }
}
