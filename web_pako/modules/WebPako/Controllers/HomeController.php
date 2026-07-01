<?php

namespace App\Modules\WebPako\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('modules.web_pako.home');
    }

    public function about()
    {
        return view('modules.web_pako.about');
    }

    public function contact()
    {
        return view('modules.web_pako.contact');
    }

    public function bod()
    {
        return view('modules.web_pako.bod');
    }
}
