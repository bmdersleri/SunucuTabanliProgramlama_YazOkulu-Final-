<?php

namespace App\Business\Concrete;

use App\Business\Abstracts\IEmployeeTerritoryService;
use App\Core\Utilities\Results\DataResult;
use App\Core\Utilities\Results\Result;
use App\Core\Utilities\Results\SuccessDataResult;
use App\Core\Utilities\Results\SuccessResult;
use App\DataAccess\Abstracts\IEmployeeTerritoryDal;
use App\Entities\Concrete\EmployeeTerritory;

class EmployeeTerritoryManager implements IEmployeeTerritoryService
{
    private IEmployeeTerritoryDal $_employeeTerritoryDal;

    /**
     * @param IEmployeeTerritoryDal $employeeTerritoryDal
     */
    public function __construct(IEmployeeTerritoryDal $employeeTerritoryDal)
    {
        $this->_employeeTerritoryDal = $employeeTerritoryDal;
    }

    /**
     * @param array|null $filter
     * @return DataResult
     */
    public function GetAll(?array $filter = null): DataResult
    {
        $result = $this->_employeeTerritoryDal->GetAll($filter);
        return new SuccessDataResult($result);
    }

    /**
     * @param $id
     * @return DataResult
     */
    public function GetById($id): DataResult
    {
        $result = $this->_employeeTerritoryDal->GetById($id);
        return new SuccessDataResult($result);
    }

    /**
     * @param array $filter
     * @return DataResult
     */
    public function Get(array $filter): DataResult
    {
        $result = $this->_employeeTerritoryDal->Get($filter);
        return new SuccessDataResult($result);

    }

    /**
     * @param EmployeeTerritory $employeeTerritory
     * @return Result
     */
    public function Add(EmployeeTerritory $employeeTerritory): Result
    {
        $this->_employeeTerritoryDal->Add($employeeTerritory);
        return new SuccessResult();
    }

    /**
     * @param $id
     * @param EmployeeTerritory $updatedEmployeeTerritory
     * @return Result
     */
    public function Update($id, EmployeeTerritory $updatedEmployeeTerritory): Result
    {
        $this->_employeeTerritoryDal->Update($id, $updatedEmployeeTerritory);
        return new SuccessResult();
    }

    /**
     * @param $id
     * @return Result
     */
    public function Delete($id): Result
    {
        $this->_employeeTerritoryDal->Delete($id);
        return new SuccessResult();
    }
}
