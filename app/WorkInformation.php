<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class WorkInformation extends Model
{
    protected $table = "work_informations";
    
    public $primaryKey = "workInfo_id";
    public $timestamps = true;

    protected $fillable = [
        'user_id','company','department','occupation','hireDate'
    ];

    public function user(){
        return $this->belongsTo('App\User');
    }
}
