<?php

namespace App\Business\Concrete;

use App\Business\Abstracts\IEmployeeService;
use App\Core\Utilities\Results\DataResult;
use App\Core\Utilities\Results\Result;
use App\Core\Utilities\Results\SuccessDataResult;
use App\Core\Utilities\Results\SuccessResult;
use App\DataAccess\Abstracts\IEmployeeDal;
use App\Entities\Concrete\Employee;

class EmployeeManager implements IEmployeeService
{
    private IEmployeeDal $_employeeDal;

    /**
     * @param IEmployeeDal $employeeDal
     */
    public function __construct(IEmployeeDal $employeeDal)
    {
        $this->_employeeDal = $employeeDal;
    }

    /**
     * @param array|null $filter
     * @return DataResult
     */
    public function GetAll(?array $filter = null): DataResult
    {
        $result = $this->_employeeDal->GetAll($filter);
        return new SuccessDataResult($result);
    }

    /**
     * @param $id
     * @return DataResult
     */
    public function GetById($id): DataResult
    {
        $result = $this->_employeeDal->GetById($id);
        return new SuccessDataResult($result);
    }

    /**
     * @param array $filter
     * @return DataResult
     */
    public function Get(array $filter): DataResult
    {
        $result = $this->_employeeDal->Get($filter);
        return new SuccessDataResult($result);

    }

    /**
     * @param Employee $employee
     * @return Result
     */
    public function Add(Employee $employee): Result
    {
        $this->_employeeDal->Add($employee);
        return new SuccessResult();
    }

    /**
     * @param $id
     * @param Employee $updatedEmployee
     * @return Result
     */
    public function Update($id, Employee $updatedEmployee): Result
    {
        $this->_employeeDal->Update($id, $updatedEmployee);
        return new SuccessResult();
    }

    /**
     * @param $id
     * @return Result
     */
    public function Delete($id): Result
    {
        $this->_employeeDal->Delete($id);
        return new SuccessResult();
    }
}
