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
        // dd($post);
        return Post::create([
            "user_id" => $post->user_id,
            "category_id" => $post->category_id,
            "title" => $post->title,
            "desc" => $post->desc
        ]);
    }
}
