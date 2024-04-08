<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomersController extends Controller
{
    public function customers(Request $request){
        return view('admin.customers.list');
    }

    public function add_customers(Request $request){
        return view('admin.customers.add');
    }
}
