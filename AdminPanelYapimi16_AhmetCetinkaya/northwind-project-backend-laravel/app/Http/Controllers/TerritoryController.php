<?php

namespace App\Http\Controllers;

use App\Business\Abstracts\ITerritoryService;
use App\Entities\Concrete\Territory;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class TerritoryController extends Controller
{
    private ITerritoryService $_territoryService;

    /**
     * @param ITerritoryService $territoryService
     */
    public function __construct(ITerritoryService $territoryService)
    {
        $this->_territoryService = $territoryService;
    }

    public function GetAll(): JsonResponse
    {
        $result = $this->_territoryService->GetAll();
        return response()->json((array)$result);
    }

    public function GetById($id): JsonResponse
    {
        $result = $this->_territoryService->GetById($id);
        return response()->json((array)$result);
    }

    public function Add(Request $request): JsonResponse
    {
        $territory = Territory::fromArray($request->all());

        $result = $this->_territoryService->Add($territory);
        return response()->json((array)$result);
    }

    public function Update(Request $request, $id): JsonResponse
    {
        $territory = Territory::fromArray($request->all());

        $result = $this->_territoryService->Update($id, $territory);
        return response()->json((array)$result);
    }

    public function Delete($id): JsonResponse
    {
        $result = $this->_territoryService->Delete($id);
        return response()->json((array)$result);
    }
}
