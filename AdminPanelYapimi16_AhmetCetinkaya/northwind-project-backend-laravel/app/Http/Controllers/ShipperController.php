<?php

namespace App\Http\Controllers;

use App\Business\Abstracts\IShipperService;
use App\Entities\Concrete\Shipper;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class ShipperController extends Controller
{
    private IShipperService $_shipperService;

    /**
     * @param IShipperService $shipperService
     */
    public function __construct(IShipperService $shipperService)
    {
        $this->_shipperService = $shipperService;
    }

    public function GetAll(): JsonResponse
    {
        $result = $this->_shipperService->GetAll();
        return response()->json((array)$result);
    }

    public function GetById($id): JsonResponse
    {
        $result = $this->_shipperService->GetById($id);
        return response()->json((array)$result);
    }

    public function Add(Request $request): JsonResponse
    {
        $shipper = Shipper::fromArray($request->all());

        $result = $this->_shipperService->Add($shipper);
        return response()->json((array)$result);
    }

    public function Update(Request $request, $id): JsonResponse
    {
        $shipper = Shipper::fromArray($request->all());

        $result = $this->_shipperService->Update($id, $shipper);
        return response()->json((array)$result);
    }

    public function Delete($id): JsonResponse
    {
        $result = $this->_shipperService->Delete($id);
        return response()->json((array)$result);
    }
}
