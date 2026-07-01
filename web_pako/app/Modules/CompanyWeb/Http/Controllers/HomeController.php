<?php

namespace App\Modules\CompanyWeb\Http\Controllers;

use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
        return view('company-web::home');
    }
}
