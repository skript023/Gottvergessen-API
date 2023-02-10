<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TransactionHistory extends Controller
{
    public function index()
    {
        return view("transaction-history");
    }
}
