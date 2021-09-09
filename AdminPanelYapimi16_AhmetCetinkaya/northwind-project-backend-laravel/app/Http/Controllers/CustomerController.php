<?php

namespace App\Http\Controllers;

use App\Business\Abstracts\ICustomerService;
use App\Entities\Concrete\Customer;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class CustomerController extends Controller
{
    private ICustomerService $_customerService;

    /**
     * @param ICustomerService $customerService
     */
    public function __construct(ICustomerService $customerService)
    {
        $this->_customerService = $customerService;
    }

    public function GetAll(): JsonResponse
    {
        $result = $this->_customerService->GetAll();
        return response()->json((array)$result);
    }

    public function GetById($id): JsonResponse
    {
        $result = $this->_customerService->GetById($id);
        return response()->json((array)$result);
    }

    public function Add(Request $request): JsonResponse
    {
        $customer = Customer::fromArray($request->all());

        $result = $this->_customerService->Add($customer);
        return response()->json((array)$result);
    }

    public function Update(Request $request, $id): JsonResponse
    {
        $customer = Customer::fromArray($request->all());

        $result = $this->_customerService->Update($id, $customer);
        return response()->json((array)$result);
    }

    public function Delete($id): JsonResponse
    {
        $result = $this->_customerService->Delete($id);
        return response()->json((array)$result);
    }
}
