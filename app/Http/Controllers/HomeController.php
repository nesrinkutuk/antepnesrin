<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    function ShowView() {
        $Name = "Nesrin Kütük";
        $Meslek = "Civil engineer student";
        $City = "Gaziantep";

        return view('hakkimda', compact('Name','Meslek','City'));
    }
}
