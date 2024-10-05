<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    // This method will return the view of the about page
    public function index()
    {
        return view('front.account.about');
    }
}
