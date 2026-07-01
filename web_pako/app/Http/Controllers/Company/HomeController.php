<?php

namespace App\Http\Controllers\Company;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('company.home');
    }

    public function about()
    {
        return view('company.about');
    }

    public function contact()
    {
        return view('company.contact');
    }

    public function bod()
    {
        return view('company.bod');
    }
}
