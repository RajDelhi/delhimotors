<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index()
    {
        $data['page_title'] = "Luxury Car Repair | Luxury Car Service Center in Delhi NCR, Premium Car Repair";
        $data['description'] = "Luxury car repair and Car service center in Delhi NCR. Visit Delhi Motors to get the best luxury car service or premium car repair and maintenance services in Delhi.";
        $data['p_keyword'] = "Luxury Car Repair, Luxury Car Service Center in Delhi NCR, Car Service Center in Delhi NCR, best luxury car service, premium car repair
";
        $data['s_keyword'] = "";
        return view('delhi-motors/home', $data);
    }

    public function about()
    {
        $data['page_title'] = "Luxury Car Repair | Luxury Car Service Center in Delhi NCR, Premium Car Repair";
        $data['description'] = "Luxury car repair and Car service center in Delhi NCR. Visit Delhi Motors to get the best luxury car service or premium car repair and maintenance services in Delhi.";
        $data['p_keyword'] = "Luxury Car Repair | Luxury Car Service Center in Delhi NCR, Premium Car Repair";
        $data['s_keyword'] = "";
        return view('delhi-motors/about', $data);
    }

    public function services()
    {
        $data['page_title'] = "Luxury Car Repair | Luxury Car Service Center in Delhi NCR, Premium Car Repair";
        $data['description'] = "Luxury car repair and Car service center in Delhi NCR. Visit Delhi Motors to get the best luxury car service or premium car repair and maintenance services in Delhi.";
        $data['p_keyword'] = "Luxury Car Repair | Luxury Car Service Center in Delhi NCR, Premium Car Repair";
        $data['s_keyword'] = "";
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
}
