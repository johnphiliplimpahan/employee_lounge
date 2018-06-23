<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProfileImage extends Model
{
    protected $table = "profile_images";
    
    public $primaryKey = "profileImage_id";
    public $timestamps = true;

    protected $fillable = [
        'user_id','profile_image'
    ];

    public function user(){
        return $this->belongsTo('App\User');
    }
}
