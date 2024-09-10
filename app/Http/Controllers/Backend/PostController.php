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
        return $this->successResponse('Posts retrived successfully.', $posts);
    }

    public function store(PostRequest $request)
    {
        $this->postService->savePost($request->all());
        return $this->successResponse("Post created Successfully");
    }

    public function show(int $id)
    {
        $post = $this->postService->viewById($id);
        return $this->successResponse("Post Found Successfully", $post);
    }

    public function update(PostRequest $request, int $id)
    {
        $this->postService->updateById($request->all(), $id);
        return $this->successResponse("Post Updated Successfully");
    }

    public function destroy(int $id)
    {
        $this->postService->deleteById($id);
        return $this->successResponse("Post deleted successfully");
    }
}
