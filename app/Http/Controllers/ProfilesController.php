<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Validator;
class ProfilesController extends Controller
{

    public function personal_information_store(Request $request){
        $validation = Validator::make($request->all(),[
            'firstname' => 'required',
            'middlename' => 'nullable',
            'lastname' => 'required',
            'gender' => 'required',
            'dob' => 'required'
        ]);

        if($validation->fails()){
            return response()->json($validation->messages());
        }else{
            $user = User::find(auth()->user()->id);
            $user->personal_information()->update($request->all());
        }
        
    }

    public function contact_information_store(Request $request){
        $validation = Validator::make($request->all(),[
            'email' => 'nullable|email|max:50',
            'mobile_no' => 'nullable|numeric',
            'telephone_no' => 'nullable|numeric',
        ]);

        if($validation->fails()){
            return response()->json($validation->messages());
        }else{
            $user = User::find(auth()->user()->id);
            $user->contact_information()->update($request->all());
        }
        
    }

    public function work_information_store(Request $request){
        $validation = Validator::make($request->all(),[
            'company' => 'required|max:50',
            'department' => 'required',
            'occupation' => 'required',
            'hireDate' => 'required'
        ]);

        if($validation->fails()){
            return response()->json($validation->messages());
        }else{
            $user = User::find(auth()->user()->id);
            $user->work_information()->update($request->all());
        }
        
    }

    public function location_information_store(Request $request){
        $validation = Validator::make($request->all(),[
            'address' => 'required'
        ]);

        if($validation->fails()){
            return response()->json($validation->messages());
        }else{
            $user = User::find(auth()->user()->id);
            $user->location_information()->update($request->all());
        }
        
    }
}
