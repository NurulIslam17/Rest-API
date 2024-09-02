<?php

namespace App\Services;

use App\Repository\CategoryRepository;

class CategoryService{

    private $categoryRepository;
    public function __construct(CategoryRepository $categoryRepository)
    {
        $this->categoryRepository = $categoryRepository;
    }

    public function getAllCatgory()
    {
        return $this->categoryRepository->getAllCatgory();
    }

    public function saveCategory($category){
        return $this->categoryRepository->saveCategory($category);
    }

    public function viewById($id){
        return $this->categoryRepository->viewById($id);
    }

    public function updateById($category, $id){
        return $this->categoryRepository->updateById($category, $id);
    }

    public function deleteById($id){
        return $this->categoryRepository->deleteById($id);
    }
}
