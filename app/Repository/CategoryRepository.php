<?php

namespace App\Repository;

use App\Models\Category;

class CategoryRepository{


    public function getAllCatgory(){
        return Category::all();
    }

    public function saveCategory($category){
        return Category::create($category);
    }

    public function viewById($id){
        return Category::findOrFail($id);
    }

    public function updateById($category, $id){
        return Category::findOrFail($id)->update($category);
    }

    public function deleteById($id){
        return Category::findOrFail($id)->delete();
    }
}
