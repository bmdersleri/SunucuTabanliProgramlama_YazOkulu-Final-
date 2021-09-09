<?php

namespace App\Business\Abstracts;

use App\Core\Utilities\Results\DataResult;
use App\Core\Utilities\Results\Result;
use App\Entities\Concrete\Employee;

interface IEmployeeService
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
     * @param Employee $employee
     * @return Result
     */
    public function Add(Employee $employee): Result;

    /**
     * @param $id
     * @param Employee $updatedEmployee
     * @return Result
     */
    public function Update($id, Employee $updatedEmployee): Result;

    /**
     * @param $id
     * @return Result
     */
    public function Delete($id): Result;
}
