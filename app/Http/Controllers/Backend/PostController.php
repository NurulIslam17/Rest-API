<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class PostController extends Controller
{
    public function index()
    {
        return view('backend.post.index');
    }
    public function create()
    {
        return view('backend.post.create');
    }
    public function store(Request $request)
    {
        try {
            Post::create([
                'title' => $request->title,
                'desc' => $request->desc,
                'user_id' => auth()->user()->id,
            ]);
            Log::info('Success :  Post Created');
        } catch (\Throwable $th) {
            Log::error($th->getMessage());
        }
        return back();
    }
}
