<?php

namespace App\Business\Abstracts;

use App\Core\Utilities\Results\DataResult;
use App\Core\Utilities\Results\Result;
use App\Entities\Concrete\Order;

interface IOrderService
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
     * @param Order $order
     * @return Result
     */
    public function Add(Order $order): Result;

    /**
     * @param $id
     * @param Order $updatedOrder
     * @return Result
     */
    public function Update($id, Order $updatedOrder): Result;

    /**
     * @param $id
     * @return Result
     */
    public function Delete($id): Result;
}
