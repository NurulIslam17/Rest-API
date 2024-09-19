<?php

namespace App\Services;

use App\Repository\PostRepository;
use App\Traits\GenerateUniqeId;

class  PostService
{
    use GenerateUniqeId;
    private $postRepository;
    public function __construct(PostRepository $postRepository)
    {
        $this->postRepository = $postRepository;
    }

    public function getAllPost()
    {
        return $this->postRepository->getAllPost();
    }

    public function savePost($post)
    {
        if (isset($post['photo'])) {
            $post['photo'] = uploadFile($post['photo']);
        };
        $post['po_id'] = $this->generateUniqueId("PI");
        return $this->postRepository->savePost($post);
    }

    public function viewById($id)
    {
        return $this->postRepository->viewById($id);
    }

    public function deleteById($id)
    {
        return $this->postRepository->deleteById($id);
    }

    public function updateById($post, $id)
    {
        if (isset($post['photo'])) {
            $prevPost = $this->postRepository->viewById($id);
            if ($prevPost && $prevPost->photo) {
                $post['photo'] = uploadFile($post['photo'],$prevPost->photo);
            }
            $post['photo'] = uploadFile($post['photo']);
        };
        $this->postRepository->updateById($post, $id);
    }
}
