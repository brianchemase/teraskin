<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerController extends Controller
{
    //
    public function index()
    {
        $data = [
            'title' => 'Customer Overview',
        ];
        return view('customers.index')->with($data);
    }

    public function serviceOverview()
    {
        $data = [
            'title' => 'Service Overview',
        ];
        return view('customers.service_overview')->with($data);
    }
}
