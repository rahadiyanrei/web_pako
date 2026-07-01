<?php

namespace App\Modules\CompanyWeb\Http\Controllers;

use App\Http\Controllers\Controller;

class AboutController extends Controller
{
    public function index()
    {
        return view('company-web::about');
    }
}
