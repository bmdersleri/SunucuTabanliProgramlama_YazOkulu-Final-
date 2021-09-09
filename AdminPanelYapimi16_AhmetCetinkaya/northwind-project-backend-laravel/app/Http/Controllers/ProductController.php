<?php

namespace App\Http\Controllers;

use App\Business\Abstracts\IProductService;
use App\Entities\Concrete\Product;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    private IProductService $_productService;

    /**
     * @param IProductService $productService
     */
    public function __construct(IProductService $productService)
    {
        $this->_productService = $productService;
    }

    public function GetAll(): JsonResponse
    {
        $result = $this->_productService->GetAll();
        return response()->json((array)$result);
    }

    public function GetById($id): JsonResponse
    {
        $result = $this->_productService->GetById($id);
        return response()->json((array)$result);
    }

    public function Add(Request $request): JsonResponse
    {
        $product = Product::fromArray($request->all());

        $result = $this->_productService->Add($product);
        return response()->json((array)$result);
    }

    public function Update(Request $request, $id): JsonResponse
    {
        $product = Product::fromArray($request->all());

        $result = $this->_productService->Update($id, $product);
        return response()->json((array)$result);
    }

    public function Delete($id): JsonResponse
    {
        $result = $this->_productService->Delete($id);
        return response()->json((array)$result);
    }
}
