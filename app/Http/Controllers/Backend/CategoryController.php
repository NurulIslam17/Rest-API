<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Http\Requests\CategoryRequest;
use App\Services\CategoryService;
use App\Traits\ApiResponse;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    use ApiResponse;
    private $categoryService;

    public function __construct(CategoryService $categoryService)
    {
        $this->categoryService = $categoryService;
    }

    public function index()
    {
        $categories = $this->categoryService->getAllCatgory();
        return $this->successResponse($categories, 'Data Retrived Succefully.');
    }

    public function store(CategoryRequest $request)
    {
        $this->categoryService->saveCategory($request->all());
        return $this->successResponse('Category Saved Successfully', 201);
    }

    public function show(int $id)
    {
        $categories = $this->categoryService->viewById($id);
        return $this->successResponse($categories, "Category Found Successfully", 200);
    }

    public function update(CategoryRequest $request, int $id)
    {
        $this->categoryService->updateById($request->all(), $id);
        return $this->successResponse("Category Updated Successfully", 200);
    }

    public function destroy(int $id)
    {
        $this->categoryService->deleteById($id);
        return $this->successResponse("Category Deleted Successfully.", 200);
    }
}
