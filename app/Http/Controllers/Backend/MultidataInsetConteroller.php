<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MultidataInsetConteroller extends Controller
{
    public function index(){
        return view('backend.multi_data.index');
    }
}
