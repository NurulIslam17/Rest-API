<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Services\UserService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use PHPUnit\Framework\Constraint\FileExists;

class UserController extends Controller
{
    private $userService;
    public function __construct(UserService $userService)
    {
        $this->userService = $userService;
    }

    public function getAllUser(){
        return $this->userService->getAllUser();
    }

    public function index()
    {
        $users = User::whereNot('type', 1)->get();
        return view('backend.user.index', compact('users'));
    }

    public function user_profile()
    {
        $user = User::where('id', auth()->user()->id)->first();
        return view('backend.user.profile', compact('user'));
    }

    public function update_profile(Request $request)
    {
        try {

            $user = User::where('id', auth()->user()->id)->first();
            $is_email_exist = User::where('email', $request->email)->exists();

            if ($is_email_exist && $user->email != $request->email) {
                Log::error("Email Exist Error : This Email is already Used.");
                return back();
            }

            $data = [
                'name' => $request->name,
                'email' => $request->email
            ];

            if ($request->hasFile('image')) {
                $imageName = time() . '.' . $request->image->extension();
                $request->image->move(public_path('images'), $imageName);
                $path = 'images/' . $imageName;
                $data['profile_photo_path'] = $path;
            }
            User::where('id', auth()->user()->id)->update($data);
            Log::info("Success : Profile Update Succesed");
            return back();
        } catch (\Throwable $th) {
            Log::error($th->getMessage());
            return back();
        }
    }
}
