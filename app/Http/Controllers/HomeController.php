<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index()
    {
        $data['page_title'] = "Luxury Car Repair | Luxury Car Service Center in Delhi NCR, Premium Car Repair";
        $data['description'] = "Best car service centre near me, car service centre near me, wheel alignment and balancing near me, car repair shop near me, vehicle repair shop near me, vehicle repair center near me, car mechanic near me, car mechanic in badarpur, car garage near me, Best car workshop near me, Luxury car service center, Luxury car service center near me";
        $data['p_keyword'] = "Ferrari Service Center In Delhi, Volvo Service Center in Delhi, Lexus Service Center in Delhi, Land Rover Service Center in Delhi, Mercedes Benz Service Center In Delhi, Rolls-Royce Phantom Service Center In Delhi, Toyota Service Center In Delhi, Audi Service Center In Delhi, Land Rover Service Center In Delhi, BMW Service Center In Delhi, Toyota Service Center In Delhi, MG Service Center In Delhi, Mini Cooper Service Center In Delhi, Audi Service Center In Delhi, Jaguar Service Center In Delhi, Kia Service Center In Delhi, Skoda Service Center In Delhi, Hyundai Service Center In Delhi, Nissan Service Center In Delhi, Mitsubishi Service Center In Delhi, Ford Service Center In Delhi, Porsche Service Center In Delhi, Range Rover Service Center In Delhi, Luxury Car Service Center in Delhi, Premium Car Service Center in Delhi, Best Car Service in Delhi";
        $data['s_keyword'] = "Ferrari Service Center In Delhi, Volvo Service Center in Delhi, Lexus Service Center in Delhi, Land Rover Service Center in Delhi, Mercedes Benz Service Center In Delhi, Rolls-Royce Phantom Service Center In Delhi, Toyota Service Center In Delhi, Audi Service Center In Delhi, Land Rover Service Center In Delhi, BMW Service Center In Delhi, Toyota Service Center In Delhi, MG Service Center In Delhi, Mini Cooper Service Center In Delhi, Audi Service Center In Delhi, Jaguar Service Center In Delhi, Kia Service Center In Delhi, Skoda Service Center In Delhi, Hyundai Service Center In Delhi, Nissan Service Center In Delhi, Mitsubishi Service Center In Delhi, Ford Service Center In Delhi, Porsche Service Center In Delhi, Range Rover Service Center In Delhi, Luxury Car Service Center in Delhi, Premium Car Service Center in Delhi, Best Car Service in Delhi";
        return view('delhi-motors/home', $data);
    }

    public function about()
    {
        $data['page_title'] = "Car Repair and service centre in  Badarpur Delhi NCR: About Us & Services";
        $data['description'] = "Need car repair in Badarpur, Delhi NCR? Learn about our expert services & trusted team. We handle everything from oil changes to major repairs. Book today!";
        $data['p_keyword'] = "car service centre in Mohan estate Delhi ,Luxury Car Service Centre in Mohan estateDelhi NCR,   best car repair in Mohan estate, Popular Car Repair & Services in Mohan  corporative, , car service centre in Badarpur, top car repair service in Mohan estate Delhi, top rated car service and repair in Mohan estateDelhi NCR, vehicle repair services inBadarpurdelhi, luxury car repair shop in Badarpur delhi ncr";
        $data['s_keyword'] = "";
        return view('delhi-motors/about', $data);
    }

    public function services()
    {
        $data['page_title'] = "Audi Repair and Audi Service Center in Delhi Near Me | BMW Repair, BMW Service Center Near Me in Delhi | Delhi Motors - Mercedes Repair, Mercedes Service Center in Delhi Near Me | Land Rover Car Repair and Land Rover Service Center in Delhi NCR | Volvo Service Center in Delhi, and car repair - Delhi Motors India ";
        $data['description'] = "Audi repairs ensure that your vehicle receives top-quality maintenance and care, When serviced by the skilled team at Delhi Motors., Delhi Motors India provide best BMW service and BMW service center Near me in delhi, To get best Mercedes Service Center in Delhi, Visit Delhi motors india offers best Mercedes Benz cars Service in delhi NCR , Visit us today to get best Land Rover Service Center in Delhi, and maintenance at Delhi motors india, Looking for Volvo car repair or Volvo service center in delhi? So you should visit Delhi motors india service center in delhi NCR";
        $data['p_keyword'] = "Audi Service Center in Delhi Near Me, BMW Service Center near me In Delhi, best Mercedes Service Center in Delhi, Land Rover Service Center in Delhi, Volvo Service Center in Delhi";
        $data['s_keyword'] = "Audi repair, Audi Service Center in Delhi, Audi Service Center in Delhi Near Me, Service Center in Delhi Near Me, BMW repair, BMW service center near me in delhi, Best BMW repair center in delhi, Service Center in delhi near me, best Mercedes Service Center in Delhi near me, Mercedes Repair Center near me, Service Center in delhi near me, Land Rover Service Center in Delhi, best Land Rover Service Center in Delhi, best Land Rover car repair Center in Delhi, Service Center in delhi near me, Volvo Service Center in Delhi, Volvo car repair, Service Center in delhi near me";
        return view('delhi-motors/services', $data);
    }

    public function contact()
    {
        $data['page_title'] = "Delhi Motors - Luxury Car Service Center in Delhi NCR, Premium Car Repair";
        $data['description'] = "We are located in Badarpur, New Delhi, Delhi Workshop Hours DAILY: 09:30AM – 06:30PM 7days Open Address A-25, Block-B-1 Mohan Estate, New delhi 110044 Phone Numbers +91 98916 11064";
        $data['p_keyword'] = "Luxury Car Service Center in Delhi NCR, Car Service Center in Delhi NCR";
        $data['s_keyword'] = "";
        return view('delhi-motors/contact', $data);
    }


    public function sendbookingemail()
    {
        try {
            // send Email
            $name = !empty($_POST['name']) ? $_POST['name'] : "";
            $contact = !empty($_POST['contact']) ? $_POST['contact'] : "";
            $bookingdate = !empty($_POST['bookingdate']) ? $_POST['bookingdate'] : "";
            $customer_message = !empty($_POST['message']) ? $_POST['message'] : "";

            $subject = "New message for booking on {$bookingdate} by {$name}";
            $message = "Following is the customer requrest : \n";
            $message .= $customer_message;

            $message .= "\n\nCustomer Name : " . $name;
            $message .= "\nCustomer Contact Number : " . $contact;
            $message .= "\nBooking request date  : " . $bookingdate;

            $to = "book@delhimotorsindia.com";



            $headers = 'From: admin@delhimotorsindia.com' . "\r\n" .
                'Reply-To: admin@delhimotorsindia.com' . "\r\n";


            mail($to, $subject, $message, $headers);
            $status['status'] = true;
            $status['message'] = "Thank you for contacting us, your request has been sent. our service advisor will contact you shortly.";
            return json_encode($status);
        } catch (e) {
            //echo ""

        }

    }

    public function winter_car_maintenance_tips()
    {
        $data['page_title'] = "Winter Car Maintenance Tips: 7 Essential Steps for Safety";
        $data['description'] = "Stay safe this winter with 7 essential car maintenance tips for cold weather. Learn how to protect your car and keep it running smoothly all season.";
        $data['p_keyword'] = "Winter Car Maintenance Tips";
        $data['s_keyword'] = "";
        return view('delhi-motors/blog', $data);
    }
    public function best_car_repair_in_mohan_estate()
    {
        $data['page_title'] = "Best Car Repair in Mohan Estate | Delhi Motors – Top Car Service in Delhi NCR";
        $data['description'] = "Looking for the best car repair in Mohan Estate? Visit Delhi Motors, a top-rated car service centre in Delhi NCR offering luxury vehicle repair, diagnostics & maintenance.";
        $data['p_keyword'] = "Best Car Repair in Mohan Estate, car service centre in delhi,Car service centre in delhi near me,top car repair service in delhi,Luxury Car Service Center in Delhi ncr,car service and repair in delhi ncr,top rated car service and repair in delhi,vehicle repair services in delhi";
        $data['s_keyword'] = "";
        return view('delhi-motors/blog2', $data);
    }
    public function luxury_car_repair_shop_in_delhi_ncr()
    {
        $data['page_title'] = "The Premier Luxury Car Repair Shop in Delhi NCR | Delhi Motors";
        $data['description'] = "Looking for the the premier Luxury Car Repair Shop in Delhi NCR? Visit Delhi Motors, a top-rated car service centre in Delhi NCR offering luxury vehicle repair, diagnostics & maintenance.";
        $data['p_keyword'] = "The Premier Luxury Car Repair Shop in Delhi NCR, car service centre in delhi,Car service centre in delhi near me,top car repair service in delhi,Luxury Car Service Center in Delhi ncr,car service and repair in delhi ncr,top rated car service and repair in delhi,vehicle repair services in delhi";
        $data['s_keyword'] = "";
        return view('delhi-motors/blog3', $data);
    }
    public function top_rated_car_garage_near_me_in_delhi()
    {
        $data['page_title'] = "top rated car garage near me delhi NCR | Delhi Motors";
        $data['description'] = "Are You Searching the Top Rated Car Garage Near Me in Delhi? Call Delhi Motors India Company for the Best Service";
        $data['p_keyword'] = "top rated car garage near me Delhi NCR, car service centre in delhi,Car service centre in delhi near me,top car repair service in delhi,Luxury Car Service Center in Delhi ncr,car service and repair in delhi ncr,top rated car service and repair in delhi,vehicle repair services in delhi";
        $data['s_keyword'] = "";
        return view('delhi-motors/blog4', $data);
    }
    public function car_service_and_repair_in_delhi_ncr()
    {
        $data['page_title'] = "Car service and repair in Delhi NCR | Delhi Motors";
        $data['description'] = "Premier Car Service and Repair in Delhi NCR: Experience the Excellence of Delhi Motors India";
        $data['p_keyword'] = "Car service and repair in Delhi NCR, top rated car garage near me Delhi NCR, car service centre in delhi,Car service centre in delhi near me,top car repair service in delhi,Luxury Car Service Center in Delhi ncr,car service and repair in delhi ncr,top rated car service and repair in delhi,vehicle repair services in delhi";
        $data['s_keyword'] = "";
        return view('delhi-motors/blog5', $data);
    }
}
