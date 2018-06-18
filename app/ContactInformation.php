<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ContactInformation extends Model
{
    
    protected $table = "contact_informations";
    
    public $primaryKey = "contactInfo_id";
    public $timestamps = true;

    protected $fillabel = [
        'user_id','email','mobile_no','telephone_no','web_address'
    ];

    public function user(){
        return $this->belongsTo('App\User');
    }
}
