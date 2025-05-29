<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ServicesController extends Controller
{
    public function audi_service_center_in_delhi()
    {
        $data['page_title'] = "Discover Premium Audi Repair Solutions in Mohan estateDelhi NCR";
        $data['description'] = "Keep your Audi in top shape with Delhi Motors India. Our expert technicians in Delhi specialize in luxury vehicle maintenance and repairs, ensuring peak performance.";
        $data['p_keyword'] = "audi car service centre in Mohan estate Delhi";
        $data['s_keyword'] = "Luxury Car Service Centre in Mohan estate Delhi NCR, best car repair in Mohan estate, Popular Car Repair & Services in Mohan corporative, car service centre in Badarpur, top car repair service in Mohan estate Delhi, top rated car service and repair in Mohan estate Delhi NCR, vehicle repair services in Badarpur delhi, luxury car repair shop in Badarpur delhi ncr";
        return view('pages/audi', $data);
    }

    public function bmw_sevice_center_in_delhi()
    {
        $data['page_title'] = "Experience Premium BMW Care at Delhi Motors India";
        $data['description'] = "Delhi Motors India provide best BMW service and BMW service center Near me in delhi";
        $data['p_keyword'] = "BMW car service centre in Mohan estate Delhi";
        $data['s_keyword'] = "Luxury Car Service Centre in Mohan estate Delhi NCR, best car repair in Mohan estate, Popular Car Repair & Services in Mohan  corporative, car service centre in Badarpur, top car repair service in Mohan estate Delhi, top rated car service and repair in Mohan estate Delhi NCR, vehicle repair services in Badarpur delhi, luxury car repair shop in Badarpur delhi ncr";
        return view('pages/bmw', $data);
    }

    public function land_rover_service_center_in_delhi()
    {
        $data['page_title'] = "Land Rover Car Repair and Land Rover Service Center in Delhi NCR";
        $data['description'] = "Visit us today to get best Land Rover Service Center in Delhi, and maintenance at Delhi motors india";
        $data['p_keyword'] = "Land Rover Service Center in Delhi NCR";
        $data['s_keyword'] = "Land Rover Service Center in Delhi, best Land Rover Service Center in Delhi, best Land Rover car repair Center in Delhi, car Service Center in delhi NCR";
        return view('pages/land_rover', $data);
    }


    public function best_mercedes_service_center_in_delhi()
    {
        $data['page_title'] = "Delhi Motors - Mercedes Repair, Best Mercedes Service Center in Delhi Near Me";
        $data['description'] = "To get best Mercedes Service Center in Delhi, Visit Delhi motors india offers best Mercedes Benz cars Service in delhi NCR";
        $data['p_keyword'] = "best Mercedes Service Center in Delhi NCR";
        $data['s_keyword'] = "best Mercedes Service Center in Delhi near me, Mercedes Repair Center near me, Service Center in delhi near me";
        return view('pages/mercedes', $data);
    }


    public function volvo_service_center_in_delhi()
    {
        $data['page_title'] = "Volvo Service Center in Delhi, and car repair - Delhi Motors India";
        $data['description'] = "Looking for Volvo car repair or Volvo service center in delhi? So you should visit Delhi motors india service center in delhi NCR";
        $data['p_keyword'] = "Volvo Service Center in Delhi NCR";
        $data['s_keyword'] = "Volvo Service Center in Delhi, Volvo car repair, Service Center in delhi near me";
        return view('pages/volvo', $data);
    }
}
