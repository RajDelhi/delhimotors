<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index(){
        $data['page_title'] = "Home";
        return view('delhi-motors/home',$data);
    }

    public function about(){
        $data['page_title'] = "About us";
        return view('delhi-motors/about',$data);
    }

    public function services(){
        $data['page_title'] = "Services";
        return view('delhi-motors/services',$data);
    }

    public function contact(){
        $data['page_title'] = "Contact Us";
        return view('delhi-motors/contact',$data);
    }
}
