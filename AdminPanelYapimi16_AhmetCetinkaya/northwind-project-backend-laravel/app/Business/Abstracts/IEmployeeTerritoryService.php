<?php

namespace App\Business\Abstracts;

use App\Core\Utilities\Results\DataResult;
use App\Core\Utilities\Results\Result;
use App\Entities\Concrete\EmployeeTerritory;

interface IEmployeeTerritoryService
{
    /**
     * @param array|null $filter
     * @return DataResult
     */
    public function GetAll(?array $filter = null): DataResult;

    /**
     * @param $id
     * @return DataResult
     */
    public function GetById($id): DataResult;

    /**
     * @param array $filter
     * @return DataResult
     */
    public function Get(array $filter): DataResult;

    /**
     * @param EmployeeTerritory $employeeTerritory
     * @return Result
     */
    public function Add(EmployeeTerritory $employeeTerritory): Result;

    /**
     * @param $id
     * @param EmployeeTerritory $updatedEmployeeTerritory
     * @return Result
     */
    public function Update($id, EmployeeTerritory $updatedEmployeeTerritory): Result;

    /**
     * @param $id
     * @return Result
     */
    public function Delete($id): Result;
}
