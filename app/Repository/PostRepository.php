<?php

namespace App\Repository;
use App\Models\Post;

class PostRepository
{
    public function getAllPost(){
        return Post::all();
    }

    public function savePost($post){
        return Post::create($post);
    }

}
