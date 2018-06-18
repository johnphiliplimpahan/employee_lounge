<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class PagesController extends Controller
{
    public function profile(){
        $user = User::find(auth()->user()->id);

        $data = [
            'personal' => $user->personal_information,
            'contact' => $user->contact_information,
            'work' => $user->work_information,
            'location' => $user->location_information
        ];

        return view('pages.profile')->with($data);
    }
}
