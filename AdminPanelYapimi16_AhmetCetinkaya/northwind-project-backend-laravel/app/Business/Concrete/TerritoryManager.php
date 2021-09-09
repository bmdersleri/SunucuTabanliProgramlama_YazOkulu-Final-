<?php

namespace App\Business\Concrete;

use App\Business\Abstracts\ITerritoryService;
use App\Core\Utilities\Results\DataResult;
use App\Core\Utilities\Results\Result;
use App\Core\Utilities\Results\SuccessDataResult;
use App\Core\Utilities\Results\SuccessResult;
use App\DataAccess\Abstracts\ITerritoryDal;
use App\Entities\Concrete\Territory;

class TerritoryManager implements ITerritoryService
{
    private ITerritoryDal $_territoryDal;

    /**
     * @param ITerritoryDal $territoryDal
     */
    public function __construct(ITerritoryDal $territoryDal)
    {
        $this->_territoryDal = $territoryDal;
    }

    /**
     * @param array|null $filter
     * @return DataResult
     */
    public function GetAll(?array $filter = null): DataResult
    {
        $result = $this->_territoryDal->GetAll($filter);
        return new SuccessDataResult($result);
    }

    /**
     * @param $id
     * @return DataResult
     */
    public function GetById($id): DataResult
    {
        $result = $this->_territoryDal->GetById($id);
        return new SuccessDataResult($result);
    }

    /**
     * @param array $filter
     * @return DataResult
     */
    public function Get(array $filter): DataResult
    {
        $result = $this->_territoryDal->Get($filter);
        return new SuccessDataResult($result);

    }

    /**
     * @param Territory $territory
     * @return Result
     */
    public function Add(Territory $territory): Result
    {
        $this->_territoryDal->Add($territory);
        return new SuccessResult();
    }

    /**
     * @param $id
     * @param Territory $updatedTerritory
     * @return Result
     */
    public function Update($id, Territory $updatedTerritory): Result
    {
        $this->_territoryDal->Update($id, $updatedTerritory);
        return new SuccessResult();
    }

    /**
     * @param $id
     * @return Result
     */
    public function Delete($id): Result
    {
        $this->_territoryDal->Delete($id);
        return new SuccessResult();
    }
}
