<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SectionsController extends Controller
{
    public function loadLogin(Request $request){
        $view = view('login');
        
        // if($request->ajax()){
        //     $section = $view->renderSections()['content'];
        //     return $section;
        // }

        return $view;
    }

    public function loadRegister(Request $request){
        $view = view('register');
        
        // if($request->ajax()){
        //     $section = $view->renderSections()['content'];
        //     return $section;
        // }

        return $view;
    }
}
