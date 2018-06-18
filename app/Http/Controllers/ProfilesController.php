<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\PersonalInformation;

class ProfilesController extends Controller
{

    public function personal_information_store(Request $request){
        
        // $this->validate($request,[
        //     'firstname' => 'required',
        //     'lastname' => 'required',
        //     'gender' => 'required',
        //     'dob' => 'required'
        // ]);
            return $request;
            
        $info = PersonalInformation::find($request->personalInfo_id);
        
        

        $save = $user->personal_information()->saveMany($request->all());
        
        if($save){
            return response()->json(['200' => "Saved"]);
        }else{
            return response()->json(['404' => "Error"]);
        }
        
    }
}
