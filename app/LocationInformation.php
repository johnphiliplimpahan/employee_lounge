<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class LocationInformation extends Model
{
    protected $table = "location_informations";
    
    public $primaryKey = "locationInfo_id";
    public $timestamps = true;

    protected $fillable = [
        'user_id','address'
    ];

    public function user(){
        return $this->belongsTo('App\User');
    }
}
