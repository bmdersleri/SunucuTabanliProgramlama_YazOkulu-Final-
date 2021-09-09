<?php

namespace App\Http\Controllers;

use App\Business\Abstracts\ICategoryService;
use App\Entities\Concrete\Category;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    private ICategoryService $_categoryService;

    /**
     * @param ICategoryService $categoryService
     */
    public function __construct(ICategoryService $categoryService)
    {
        $this->_categoryService = $categoryService;
    }

    public function GetAll(): JsonResponse
    {
        $result = $this->_categoryService->GetAll();
        return response()->json((array)$result);
    }

    public function GetById($id): JsonResponse
    {
        $result = $this->_categoryService->GetById($id);
        return response()->json((array)$result);
    }

    public function Add(Request $request): JsonResponse
    {
        $category = Category::fromArray($request->all());

        $result = $this->_categoryService->Add($category);
        return response()->json((array)$result);
    }

    public function Update(Request $request, $id): JsonResponse
    {
        $category = Category::fromArray($request->all());

        $result = $this->_categoryService->Update($id, $category);
        return response()->json((array)$result);
    }

    public function Delete($id): JsonResponse
    {
        $result = $this->_categoryService->Delete($id);
        return response()->json((array)$result);
    }
}
