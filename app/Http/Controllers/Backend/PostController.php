<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\PostRequest;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;

class PostController extends Controller
{
    public function index()
    {
        // $statusWisePost = Post::get()->groupBy('status');
        // return $statusWisePost;
        $posts = Post::where('user_id',auth()->user()->id)->get();
        return view('backend.post.index',compact('posts'));
    }
    public function create()
    {
        return view('backend.post.create');
    }
    public function store(PostRequest $request)
    {
        try {
            $validated = $request->validated();
            $validated['user_id'] = auth()->user()->id;

            if ($request->hasFile('image')) {
                $file = $request->file('image');
                $imageName = "POST".'_'.time().'.'.$file->getClientOriginalExtension();
                $file->move('photo/posts/',$imageName);
                $imagePath = 'photo/posts/'.$imageName;
                $validated['photo'] = $imagePath;
            } else {
                $validated['photo'] = null;
            }
            Post::create($validated);
            Log::info('Success :  Post Created');
            return redirect()->route('post.index');

        } catch (\Throwable $th) {
            Log::error($th->getMessage());
            return back();
        }
    }
}
