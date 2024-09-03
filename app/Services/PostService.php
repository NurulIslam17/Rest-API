<?php

namespace App\Services;

use App\Repository\PostRepository;

class  PostService{
    private $postRepository;
    public function __construct(PostRepository $postRepository)
    {
        $this->postRepository = $postRepository;
    }

    public function getAllPost(){
        return $this->postRepository->getAllPost();
    }

    public function save($post){
        return $this->postRepository->save($post);
    }
}
