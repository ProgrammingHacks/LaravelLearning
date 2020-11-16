<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class PagesController extends Controller
{
    public function index()
    {
        $customers = Customer::all();
        return view('index', compact('customers'));
    }

    public function about()
    {
        return view('about');
    }
}
