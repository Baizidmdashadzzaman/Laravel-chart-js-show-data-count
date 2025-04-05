<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\{
    Setting,Booking,Page,Contactus,Subscriber,OpeningHour,
    Slider,SupportingOrg,JobApplication,
};

class HomeController extends Controller
{

    public function dashboard()
    {
        $dataCounts = [
            'pages' => Page::count(),
            'contactus' => Contactus::count(),
            'subscribers' => Subscriber::count(),
            'opening_hours' => OpeningHour::count(),
            'sliders' => Slider::count(),
            'supporting_orgs' => SupportingOrg::count(),
            'job_applications' => JobApplication::count(),
        ];
        return view('dashboard',compact('dataCounts'));
    }


}
