<?php

namespace App\Modules\VendorPortalInko\Http\Controllers;

use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        return view('vendor-portal-inko::dashboard');
    }
}
