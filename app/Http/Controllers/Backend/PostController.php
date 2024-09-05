<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\PostRequest;
use App\Services\PostService;
use App\Traits\ApiResponse;
use Illuminate\Http\Request;

class PostController extends Controller
{
    use ApiResponse;

    private $postService;
    public function __construct(PostService $postService)
    {
        $this->postService = $postService;
    }

    public function index()
    {
        $posts = $this->postService->getAllPost();
        return $this->successResponse($posts, 'ALl blogs retrived successfully.');
    }

    public function store(Request $request)
    {
        $this->postService->savePost($request);
        return $this->successResponse("Blog created Successfully", 201);
    }

    public function show(int $id)
    {
        $post = $this->postService->viewById($id);
        return $this->successResponse($post, "Post Found Successfully");
    }

    public function update(Request $request, string $id) {}


    public function destroy(string $id) {}
}
