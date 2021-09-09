<?php

namespace App\Http\Controllers;

use App\Business\Abstracts\IRegionService;
use App\Entities\Concrete\Region;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class RegionController extends Controller
{
    private IRegionService $_regionService;

    /**
     * @param IRegionService $regionService
     */
    public function __construct(IRegionService $regionService)
    {
        $this->_regionService = $regionService;
    }

    public function GetAll(): JsonResponse
    {
        $result = $this->_regionService->GetAll();
        return response()->json((array)$result);
    }

    public function GetById($id): JsonResponse
    {
        $result = $this->_regionService->GetById($id);
        return response()->json((array)$result);
    }

    public function Add(Request $request): JsonResponse
    {
        $region = Region::fromArray($request->all());

        $result = $this->_regionService->Add($region);
        return response()->json((array)$result);
    }

    public function Update(Request $request, $id): JsonResponse
    {
        $region = Region::fromArray($request->all());

        $result = $this->_regionService->Update($id, $region);
        return response()->json((array)$result);
    }

    public function Delete($id): JsonResponse
    {
        $result = $this->_regionService->Delete($id);
        return response()->json((array)$result);
    }
}
