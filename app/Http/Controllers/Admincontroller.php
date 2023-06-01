<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Admincontroller extends Controller
{
    
    public function managerdashboard()
    {
        return view('managerdashboard');
    }
    public function clientdashboard()
    {
        return view('clientdashboard');
    }
}

