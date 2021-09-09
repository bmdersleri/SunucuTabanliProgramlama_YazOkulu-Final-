<?php

namespace App\Http\Controllers;

use App\Business\Abstracts\ISupplierService;
use App\Entities\Concrete\Supplier;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class SupplierController extends Controller
{
    private ISupplierService $_supplierService;

    /**
     * @param ISupplierService $supplierService
     */
    public function __construct(ISupplierService $supplierService)
    {
        $this->_supplierService = $supplierService;
    }

    public function GetAll(): JsonResponse
    {
        $result = $this->_supplierService->GetAll();
        return response()->json((array)$result);
    }

    public function GetById($id): JsonResponse
    {
        $result = $this->_supplierService->GetById($id);
        return response()->json((array)$result);
    }

    public function Add(Request $request): JsonResponse
    {
        $supplier = Supplier::fromArray($request->all());

        $result = $this->_supplierService->Add($supplier);
        return response()->json((array)$result);
    }

    public function Update(Request $request, $id): JsonResponse
    {
        $supplier = Supplier::fromArray($request->all());

        $result = $this->_supplierService->Update($id, $supplier);
        return response()->json((array)$result);
    }

    public function Delete($id): JsonResponse
    {
        $result = $this->_supplierService->Delete($id);
        return response()->json((array)$result);
    }
}
