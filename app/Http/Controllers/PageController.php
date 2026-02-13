<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PageController extends Controller
{
    public function welcome() {
        return view('welcome');
    }
    public function contact() {
        return view('contact');
    }

    public function properties() {
        return view('properties');
    }

    public function agents() {
        return view('agents');
    }

    public function about() {
        return view('about');
    }

    public function propertyDetails() {
        return view('property-details');
    }
}
