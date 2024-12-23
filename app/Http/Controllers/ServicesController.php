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

    public function land_rover_service_center_in_delhi()
    {
        $data['page_title'] = "Land Rover Car Repair and Land Rover Service Center in Delhi NCR";
        $data['description'] = "Visit us today to get best Land Rover Service Center in Delhi, and maintenance at Delhi motors india";
        $data['p_keyword'] = "Land Rover Service Center in Delhi";
        $data['s_keyword'] = "Land Rover Service Center in Delhi, best Land Rover Service Center in Delhi, best Land Rover car repair Center in Delhi, Service Center in delhi near me";
        return view('pages/land_rover', $data);
    }


    public function best_mercedes_service_center_in_delhi()
    {
        $data['page_title'] = "Delhi Motors - Mercedes Repair, Best Mercedes Service Center in Delhi Near Me";
        $data['description'] = "To get best Mercedes Service Center in Delhi, Visit Delhi motors india offers best Mercedes Benz cars Service in delhi NCR";
        $data['p_keyword'] = "best Mercedes Service Center in Delhi";
        $data['s_keyword'] = "best Mercedes Service Center in Delhi near me, Mercedes Repair Center near me, Service Center in delhi near me";
        return view('pages/mercedes', $data);
    }


    // public function bmw_sevice_center_in_delhi()
    // {
    //     $data['page_title'] = "Audi Repair and Audi Service Center in Delhi Near Me";
    //     $data['description'] = "Audi repairs, Audi Service Center in Delhi Near Me ensure that your vehicle receives top-quality maintenance and care, When serviced by the skilled team at Delhi Motors.";
    //     $data['p_keyword'] = "Audi Service Center in Delhi Near Me";
    //     $data['s_keyword'] = "Audi repair, Audi Service Center in Delhi, Audi Service Center in Delhi Near Me, Service Center in Delhi Near Me";
    //     return view('pages/audi', $data);
    // }
}
