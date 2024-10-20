<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{

    public function index()
    {
        $data['page_title'] = "Reliable and Professional Automobile Services in Delhi";
        return view('delhi-motors/home', $data);
    }

    public function about()
    {
        $data['page_title'] = "About Delhi Motors India";
        return view('delhi-motors/about', $data);
    }

    public function services()
    {
        $data['page_title'] = "Our Expert Automobile Services";
        return view('delhi-motors/services', $data);
    }

    public function contact()
    {
        $data['page_title'] = "Get In Touch with Delhi Motors India";
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
