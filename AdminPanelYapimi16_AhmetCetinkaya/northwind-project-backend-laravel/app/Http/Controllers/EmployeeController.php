<?php

namespace App\Http\Controllers;

use App\Business\Abstracts\IEmployeeService;
use App\Entities\Concrete\Employee;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    private IEmployeeService $_employeeService;

    /**
     * @param IEmployeeService $employeeService
     */
    public function __construct(IEmployeeService $employeeService)
    {
        $this->_employeeService = $employeeService;
    }

    public function GetAll(): JsonResponse
    {
        $result = $this->_employeeService->GetAll();
        return response()->json((array)$result);
    }

    public function GetById($id): JsonResponse
    {
        $result = $this->_employeeService->GetById($id);
        return response()->json((array)$result);
    }

    public function Add(Request $request): JsonResponse
    {
        $employee = Employee::fromArray($request->all());

        $result = $this->_employeeService->Add($employee);
        return response()->json((array)$result);
    }

    public function Update(Request $request, $id): JsonResponse
    {
        $employee = Employee::fromArray($request->all());

        $result = $this->_employeeService->Update($id, $employee);
        return response()->json((array)$result);
    }

    public function Delete($id): JsonResponse
    {
        $result = $this->_employeeService->Delete($id);
        return response()->json((array)$result);
    }
}
