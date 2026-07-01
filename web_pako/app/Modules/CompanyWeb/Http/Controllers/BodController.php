<?php

namespace App\Modules\CompanyWeb\Http\Controllers;

use App\Http\Controllers\Controller;

class BodController extends Controller
{
    public function index()
    {
        return view('company-web::bod');
    }
}
