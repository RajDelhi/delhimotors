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
}
