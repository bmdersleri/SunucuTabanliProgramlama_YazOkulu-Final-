<?php

namespace App\Business\Concrete;

use App\Business\Abstracts\IOrderService;
use App\Core\Utilities\Results\DataResult;
use App\Core\Utilities\Results\Result;
use App\Core\Utilities\Results\SuccessDataResult;
use App\Core\Utilities\Results\SuccessResult;
use App\DataAccess\Abstracts\IOrderDal;
use App\Entities\Concrete\Order;

class OrderManager implements IOrderService
{
    private IOrderDal $_orderDal;

    /**
     * @param IOrderDal $orderDal
     */
    public function __construct(IOrderDal $orderDal)
    {
        $this->_orderDal = $orderDal;
    }

    /**
     * @param array|null $filter
     * @return DataResult
     */
    public function GetAll(?array $filter = null): DataResult
    {
        $result = $this->_orderDal->GetAll($filter);
        return new SuccessDataResult($result);
    }

    /**
     * @param $id
     * @return DataResult
     */
    public function GetById($id): DataResult
    {
        $result = $this->_orderDal->GetById($id);
        return new SuccessDataResult($result);
    }

    /**
     * @param array $filter
     * @return DataResult
     */
    public function Get(array $filter): DataResult
    {
        $result = $this->_orderDal->Get($filter);
        return new SuccessDataResult($result);

    }

    /**
     * @param Order $order
     * @return Result
     */
    public function Add(Order $order): Result
    {
        $this->_orderDal->Add($order);
        return new SuccessResult();
    }

    /**
     * @param $id
     * @param Order $updatedOrder
     * @return Result
     */
    public function Update($id, Order $updatedOrder): Result
    {
        $this->_orderDal->Update($id, $updatedOrder);
        return new SuccessResult();
    }

    /**
     * @param $id
     * @return Result
     */
    public function Delete($id): Result
    {
        $this->_orderDal->Delete($id);
        return new SuccessResult();
    }
}
