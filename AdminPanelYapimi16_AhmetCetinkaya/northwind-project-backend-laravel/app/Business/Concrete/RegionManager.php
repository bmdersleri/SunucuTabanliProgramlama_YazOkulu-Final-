<?php

namespace App\Business\Concrete;

use App\Business\Abstracts\IRegionService;
use App\Core\Utilities\Results\DataResult;
use App\Core\Utilities\Results\Result;
use App\Core\Utilities\Results\SuccessDataResult;
use App\Core\Utilities\Results\SuccessResult;
use App\DataAccess\Abstracts\IRegionDal;
use App\Entities\Concrete\Region;

class RegionManager implements IRegionService
{
    private IRegionDal $_regionDal;

    /**
     * @param IRegionDal $regionDal
     */
    public function __construct(IRegionDal $regionDal)
    {
        $this->_regionDal = $regionDal;
    }

    /**
     * @param array|null $filter
     * @return DataResult
     */
    public function GetAll(?array $filter = null): DataResult
    {
        $result = $this->_regionDal->GetAll($filter);
        return new SuccessDataResult($result);
    }

    /**
     * @param $id
     * @return DataResult
     */
    public function GetById($id): DataResult
    {
        $result = $this->_regionDal->GetById($id);
        return new SuccessDataResult($result);
    }

    /**
     * @param array $filter
     * @return DataResult
     */
    public function Get(array $filter): DataResult
    {
        $result = $this->_regionDal->Get($filter);
        return new SuccessDataResult($result);

    }

    /**
     * @param Region $region
     * @return Result
     */
    public function Add(Region $region): Result
    {
        $this->_regionDal->Add($region);
        return new SuccessResult();
    }

    /**
     * @param $id
     * @param Region $updatedRegion
     * @return Result
     */
    public function Update($id, Region $updatedRegion): Result
    {
        $this->_regionDal->Update($id, $updatedRegion);
        return new SuccessResult();
    }

    /**
     * @param $id
     * @return Result
     */
    public function Delete($id): Result
    {
        $this->_regionDal->Delete($id);
        return new SuccessResult();
    }
}
