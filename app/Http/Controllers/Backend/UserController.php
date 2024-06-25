<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index()
    {
        $users = User::whereNot('type',1)->get();
        return view('backend.user.index',compact('users'));
    }

    public function user_profile(){
        $user = User::where('id',auth()->user()->id)->first();
        return view('backend.user.profile',compact('user'));
    }

    public function update_profile(Request $request){

        
        dd($request->all());
    }
}
