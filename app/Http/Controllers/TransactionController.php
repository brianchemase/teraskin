<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TransactionController extends Controller
{
    //

    public function index()
    {
        $data = [
            'title' => 'Transactions',
        ];
        return view('transactions.index')->with($data);
    }
}
