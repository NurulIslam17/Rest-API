<?php

namespace App\Repository;
use App\Models\Post;

class PostRepository
{
    public function getAllPost(){
        return Post::all();
    }

    public function save($post){
        return Post::create($post);
    }

}
