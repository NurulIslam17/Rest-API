<?php

namespace App\Services;

use App\PostRepository\PostRepository;

class  PostService{
    private $postRepository;
    public function __construct(PostRepository $postRepository)
    {
        $this->postRepository = $postRepository;
    }
}
