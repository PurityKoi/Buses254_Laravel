<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
	//This is the controller for the main page (splash.blade.php)
    public function splash ()
    {
return view('pages.splash');

    }

//This is the controller for the about_us page (about_us.blade.php)
    public function aboutUs ()
    {
return view('pages.about_us');

}

public function buscompDashboard ()
    {
return view('pages.buscomp_dashboard');

}

}
