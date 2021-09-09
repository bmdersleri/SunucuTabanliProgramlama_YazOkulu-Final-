<?php

namespace App\Business\Abstracts;

use App\Core\Utilities\Results\DataResult;
use App\Core\Utilities\Results\Result;
use App\Entities\Concrete\Shipper;

interface IShipperService
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
     * @param Shipper $shipper
     * @return Result
     */
    public function Add(Shipper $shipper): Result;

    /**
     * @param $id
     * @param Shipper $updatedShipper
     * @return Result
     */
    public function Update($id, Shipper $updatedShipper): Result;

    /**
     * @param $id
     * @return Result
     */
    public function Delete($id): Result;
}
