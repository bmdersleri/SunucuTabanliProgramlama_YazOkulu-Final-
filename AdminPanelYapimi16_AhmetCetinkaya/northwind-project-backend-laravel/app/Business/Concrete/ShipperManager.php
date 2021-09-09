<?php

namespace App\Business\Concrete;

use App\Business\Abstracts\IShipperService;
use App\Core\Utilities\Results\DataResult;
use App\Core\Utilities\Results\Result;
use App\Core\Utilities\Results\SuccessDataResult;
use App\Core\Utilities\Results\SuccessResult;
use App\DataAccess\Abstracts\IShipperDal;
use App\Entities\Concrete\Shipper;

class ShipperManager implements IShipperService
{
    private IShipperDal $_shipperDal;

    /**
     * @param IShipperDal $shipperDal
     */
    public function __construct(IShipperDal $shipperDal)
    {
        $this->_shipperDal = $shipperDal;
    }

    /**
     * @param array|null $filter
     * @return DataResult
     */
    public function GetAll(?array $filter = null): DataResult
    {
        $result = $this->_shipperDal->GetAll($filter);
        return new SuccessDataResult($result);
    }

    /**
     * @param $id
     * @return DataResult
     */
    public function GetById($id): DataResult
    {
        $result = $this->_shipperDal->GetById($id);
        return new SuccessDataResult($result);
    }

    /**
     * @param array $filter
     * @return DataResult
     */
    public function Get(array $filter): DataResult
    {
        $result = $this->_shipperDal->Get($filter);
        return new SuccessDataResult($result);

    }

    /**
     * @param Shipper $shipper
     * @return Result
     */
    public function Add(Shipper $shipper): Result
    {
        $this->_shipperDal->Add($shipper);
        return new SuccessResult();
    }

    /**
     * @param $id
     * @param Shipper $updatedShipper
     * @return Result
     */
    public function Update($id, Shipper $updatedShipper): Result
    {
        $this->_shipperDal->Update($id, $updatedShipper);
        return new SuccessResult();
    }

    /**
     * @param $id
     * @return Result
     */
    public function Delete($id): Result
    {
        $this->_shipperDal->Delete($id);
        return new SuccessResult();
    }
}
