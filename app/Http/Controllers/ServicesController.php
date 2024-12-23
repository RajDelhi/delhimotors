<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function audi_service_center_in_delhi()
    {
        $data['page_title'] = "Audi Repair and Audi Service Center in Delhi Near Me";
        $data['description'] = "Audi repairs, Audi Service Center in Delhi Near Me ensure that your vehicle receives top-quality maintenance and care, When serviced by the skilled team at Delhi Motors.";
        $data['p_keyword'] = "Audi Service Center in Delhi Near Me";
        $data['s_keyword'] = "Audi repair, Audi Service Center in Delhi, Audi Service Center in Delhi Near Me, Service Center in Delhi Near Me";
        return view('pages/audi', $data);
    }

    public function bmw_sevice_center_in_delhi()
    {
        $data['page_title'] = "BMW Repair, BMW Service Center Near Me in Delhi";
        $data['description'] = "Delhi Motors India provide best BMW service and BMW service center Near me in delhi";
        $data['p_keyword'] = "BMW Service Center near me In Delhi";
        $data['s_keyword'] = "BMW repair, BMW service center near me in delhi, Best BMW repair center in delhi, Service Center in delhi near me";
        return view('pages/bmw', $data);
    }

    // public function bmw_sevice_center_in_delhi()
    // {
    //     $data['page_title'] = "Audi Repair and Audi Service Center in Delhi Near Me";
    //     $data['description'] = "Audi repairs, Audi Service Center in Delhi Near Me ensure that your vehicle receives top-quality maintenance and care, When serviced by the skilled team at Delhi Motors.";
    //     $data['p_keyword'] = "Audi Service Center in Delhi Near Me";
    //     $data['s_keyword'] = "Audi repair, Audi Service Center in Delhi, Audi Service Center in Delhi Near Me, Service Center in Delhi Near Me";
    //     return view('pages/audi', $data);
    // }


    // public function bmw_sevice_center_in_delhi()
    // {
    //     $data['page_title'] = "Audi Repair and Audi Service Center in Delhi Near Me";
    //     $data['description'] = "Audi repairs, Audi Service Center in Delhi Near Me ensure that your vehicle receives top-quality maintenance and care, When serviced by the skilled team at Delhi Motors.";
    //     $data['p_keyword'] = "Audi Service Center in Delhi Near Me";
    //     $data['s_keyword'] = "Audi repair, Audi Service Center in Delhi, Audi Service Center in Delhi Near Me, Service Center in Delhi Near Me";
    //     return view('pages/audi', $data);
    // }


    // public function bmw_sevice_center_in_delhi()
    // {
    //     $data['page_title'] = "Audi Repair and Audi Service Center in Delhi Near Me";
    //     $data['description'] = "Audi repairs, Audi Service Center in Delhi Near Me ensure that your vehicle receives top-quality maintenance and care, When serviced by the skilled team at Delhi Motors.";
    //     $data['p_keyword'] = "Audi Service Center in Delhi Near Me";
    //     $data['s_keyword'] = "Audi repair, Audi Service Center in Delhi, Audi Service Center in Delhi Near Me, Service Center in Delhi Near Me";
    //     return view('pages/audi', $data);
    // }
}
