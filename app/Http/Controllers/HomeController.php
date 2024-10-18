<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index(){
        $data['page_title'] = "Reliable and Professional Automobile Services in Delhi";
        return view('delhi-motors/home',$data);
    }

    public function about(){
        $data['page_title'] = "About Delhi Motors India";
        return view('delhi-motors/about',$data);
    }

    public function services(){
        $data['page_title'] = "Our Expert Automobile Services";
        return view('delhi-motors/services',$data);
    }

    public function contact(){
        $data['page_title'] = "Get In Touch with Delhi Motors India";
        return view('delhi-motors/contact',$data);
    }
}
