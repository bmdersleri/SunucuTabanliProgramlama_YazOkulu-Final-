<?php

namespace App\Http\Controllers;

use App\Business\Abstracts\IOrderService;
use App\Entities\Concrete\Order;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    private IOrderService $_orderService;

    /**
     * @param IOrderService $orderService
     */
    public function __construct(IOrderService $orderService)
    {
        $this->_orderService = $orderService;
    }

    public function GetAll(): JsonResponse
    {
        $result = $this->_orderService->GetAll();
        return response()->json((array)$result);
    }

    public function GetById($id): JsonResponse
    {
        $result = $this->_orderService->GetById($id);
        return response()->json((array)$result);
    }

    public function Add(Request $request): JsonResponse
    {
        $order = Order::fromArray($request->all());

        $result = $this->_orderService->Add($order);
        return response()->json((array)$result);
    }

    public function Update(Request $request, $id): JsonResponse
    {
        $order = Order::fromArray($request->all());

        $result = $this->_orderService->Update($id, $order);
        return response()->json((array)$result);
    }

    public function Delete($id): JsonResponse
    {
        $result = $this->_orderService->Delete($id);
        return response()->json((array)$result);
    }
}
