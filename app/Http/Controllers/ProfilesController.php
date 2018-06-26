<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\ProfileImage;
use Validator;
use Storage;
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

    public function profile_image_store(Request $request){

        $current_image = ProfileImage::where('user_id',auth()->user()->id)->first();
        $user = User::find(auth()->user()->id);

        Validator::make($request->all(),[
            'profile_image' => 'image|max:1999'
        ]);
        
        if($request->hasFile('profile_image')){
            $namewithext = $request->file('profile_image')->getClientOriginalName();
            $name = pathinfo($namewithext, PATHINFO_FILENAME);
            $ext = $request->file('profile_image')->getClientOriginalExtension();
            $nametostore = $name.'_'.time().'.'.$ext;

            if($current_image->profile_image === 'placeholder_image.png'){
                $user->profile_image()->update(['profile_image' => $nametostore]);
                $path = $request->file('profile_image')->storeAs('public/profile-images',$nametostore);
                return redirect('profile');
            }

            Storage::delete(['public/profile-images/'.$current_image->profile_image]);
            $user->profile_image()->update(['profile_image' => $nametostore]);
            $path = $request->file('profile_image')->storeAs('public/profile-images',$nametostore);
            return redirect('profile');
        }

        
        
    }
}
