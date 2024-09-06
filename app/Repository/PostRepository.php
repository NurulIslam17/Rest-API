<?php

namespace App\Repository;

use App\Models\Post;

class PostRepository
{
    public function getAllPost()
    {
        return Post::all();
    }

    public function savePost($post)
    {
        return Post::create($post);
    }

    public function viewById($id)
    {
        return Post::findOrFail($id);
    }

    public function deleteById($id){
        return Post::findOrFail($id)->delete();
    }
}
