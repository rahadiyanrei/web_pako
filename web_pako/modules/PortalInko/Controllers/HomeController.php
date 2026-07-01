<?php

namespace App\Modules\PortalInko\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('modules.portal_inko.home');
    }

    public function supplier()
    {
        return view('modules.portal_inko.supplier.index');
    }

    public function supplierPo()
    {
        return view('modules.portal_inko.supplier.po');
    }

    public function supplierDn()
    {
        return view('modules.portal_inko.supplier.dn');
    }
}
