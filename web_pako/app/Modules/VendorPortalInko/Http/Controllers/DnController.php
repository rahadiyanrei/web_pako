<?php

namespace App\Modules\VendorPortalInko\Http\Controllers;

use App\Http\Controllers\Controller;

class DnController extends Controller
{
    public function index()
    {
        return view('vendor-portal-inko::dn');
    }
}
