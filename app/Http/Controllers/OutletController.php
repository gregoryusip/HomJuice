<?php

namespace App\Http\Controllers;

use App\Models\Outlet;
use Illuminate\Http\Request;

class OutletController extends Controller
{
    //
    public function index()
    {
        return view('outlet.outlet', [
            "title" => "Outlet",
            "outlets" => Outlet::all(),
        ]);
    }
}
