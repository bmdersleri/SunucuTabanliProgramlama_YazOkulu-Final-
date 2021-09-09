<?php

namespace App\Http\Controllers;

use App\Business\Abstracts\IOrderDetailService;
use App\Entities\Concrete\OrderDetail;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class OrderDetailController extends Controller
{
    private IOrderDetailService $_orderDetailService;

    /**
     * @param IOrderDetailService $orderDetailService
     */
    public function __construct(IOrderDetailService $orderDetailService)
    {
        $this->_orderDetailService = $orderDetailService;
    }

    public function GetAll(): JsonResponse
    {
        $result = $this->_orderDetailService->GetAll();
        return response()->json((array)$result);
    }

    public function GetById($id): JsonResponse
    {
        $result = $this->_orderDetailService->GetById($id);
        return response()->json((array)$result);
    }

    public function Add(Request $request): JsonResponse
    {
        $orderDetail = OrderDetail::fromArray($request->all());

        $result = $this->_orderDetailService->Add($orderDetail);
        return response()->json((array)$result);
    }

    public function Update(Request $request, $id): JsonResponse
    {
        $orderDetail = OrderDetail::fromArray($request->all());

        $result = $this->_orderDetailService->Update($id, $orderDetail);
        return response()->json((array)$result);
    }

    public function Delete($id): JsonResponse
    {
        $result = $this->_orderDetailService->Delete($id);
        return response()->json((array)$result);
    }
}
