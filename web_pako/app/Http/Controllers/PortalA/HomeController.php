<?php

namespace App\Http\Controllers\PortalA;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('portal_a.home');
    }

    public function supplier()
    {
        return view('portal_a.supplier.index');
    }

    public function po()
    {
        return view('portal_a.supplier.po');
    }

    public function dn()
    {
        return view('portal_a.supplier.dn');
    }
}
