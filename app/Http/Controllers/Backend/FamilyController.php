<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FamilyController extends Controller
{
    public function index()
    {
        return view('backend.family.index');
    }

    public function createFamilyInfo()
    {
        return view('backend.family.create');
    }
}
