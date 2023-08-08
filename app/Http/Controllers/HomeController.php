<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * This Method will return Landing Page
    */
    public function index()
    {
        return view('frontend.home.home');
    }
}
