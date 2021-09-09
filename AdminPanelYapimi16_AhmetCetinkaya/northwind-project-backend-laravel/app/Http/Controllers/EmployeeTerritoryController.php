<?php

namespace App\Http\Controllers;

use App\Business\Abstracts\IEmployeeTerritoryService;
use App\Entities\Concrete\EmployeeTerritory;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class EmployeeTerritoryController extends Controller
{
    private IEmployeeTerritoryService $_employeeTerritoryService;

    /**
     * @param IEmployeeTerritoryService $employeeTerritoryService
     */
    public function __construct(IEmployeeTerritoryService $employeeTerritoryService)
    {
        $this->_employeeTerritoryService = $employeeTerritoryService;
    }

    public function GetAll(): JsonResponse
    {
        $result = $this->_employeeTerritoryService->GetAll();
        return response()->json((array)$result);
    }

    public function GetById($id): JsonResponse
    {
        $result = $this->_employeeTerritoryService->GetById($id);
        return response()->json((array)$result);
    }

    public function Add(Request $request): JsonResponse
    {
        $employeeTerritory = EmployeeTerritory::fromArray($request->all());

        $result = $this->_employeeTerritoryService->Add($employeeTerritory);
        return response()->json((array)$result);
    }

    public function Update(Request $request, $id): JsonResponse
    {
        $employeeTerritory = EmployeeTerritory::fromArray($request->all());

        $result = $this->_employeeTerritoryService->Update($id, $employeeTerritory);
        return response()->json((array)$result);
    }

    public function Delete($id): JsonResponse
    {
        $result = $this->_employeeTerritoryService->Delete($id);
        return response()->json((array)$result);
    }
}
