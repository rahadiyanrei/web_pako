<?php

namespace App\Http\Controllers\PortalB;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('portal_b.home');
    }

    public function supplier()
    {
        return view('portal_b.supplier.index');
    }

    public function po()
    {
        return view('portal_b.supplier.po');
    }

    public function dn()
    {
        return view('portal_b.supplier.dn');
    }
}
