<?php

namespace App\Business\Abstracts;

use App\Core\Utilities\Results\DataResult;
use App\Core\Utilities\Results\Result;
use App\Entities\Concrete\OrderDetail;

interface IOrderDetailService
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
     * @param OrderDetail $orderDetail
     * @return Result
     */
    public function Add(OrderDetail $orderDetail): Result;

    /**
     * @param $id
     * @param OrderDetail $updatedOrderDetail
     * @return Result
     */
    public function Update($id, OrderDetail $updatedOrderDetail): Result;

    /**
     * @param $id
     * @return Result
     */
    public function Delete($id): Result;
}
