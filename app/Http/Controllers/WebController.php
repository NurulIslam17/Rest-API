<?php

namespace App\Http\Controllers;

use App\Models\Address;
use Illuminate\Http\Request;

class WebController extends Controller
{
    public function index(){
        $address = Address::first();
        return view('web.index',compact('address'));
    }
}
