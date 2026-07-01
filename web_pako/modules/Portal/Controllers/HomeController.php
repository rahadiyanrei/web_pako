<?php

namespace App\Modules\Portal\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('modules.portal.home');
    }

    public function supplier()
    {
        return view('modules.portal.supplier.index');
    }

    public function supplierPo()
    {
        return view('modules.portal.supplier.po');
    }

    public function supplierDn()
    {
        return view('modules.portal.supplier.dn');
    }
}
