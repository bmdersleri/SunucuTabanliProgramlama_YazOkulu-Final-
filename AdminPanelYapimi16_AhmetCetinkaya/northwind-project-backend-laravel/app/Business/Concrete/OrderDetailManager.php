<?php

namespace App\Business\Concrete;

use App\Business\Abstracts\IOrderDetailService;
use App\Core\Utilities\Results\DataResult;
use App\Core\Utilities\Results\Result;
use App\Core\Utilities\Results\SuccessDataResult;
use App\Core\Utilities\Results\SuccessResult;
use App\DataAccess\Abstracts\IOrderDetailDal;
use App\Entities\Concrete\OrderDetail;

class OrderDetailManager implements IOrderDetailService
{
    private IOrderDetailDal $_orderDetailDal;

    /**
     * @param IOrderDetailDal $orderDetailDal
     */
    public function __construct(IOrderDetailDal $orderDetailDal)
    {
        $this->_orderDetailDal = $orderDetailDal;
    }

    /**
     * @param array|null $filter
     * @return DataResult
     */
    public function GetAll(?array $filter = null): DataResult
    {
        $result = $this->_orderDetailDal->GetAll($filter);
        return new SuccessDataResult($result);
    }

    /**
     * @param $id
     * @return DataResult
     */
    public function GetById($id): DataResult
    {
        $result = $this->_orderDetailDal->GetById($id);
        return new SuccessDataResult($result);
    }

    /**
     * @param array $filter
     * @return DataResult
     */
    public function Get(array $filter): DataResult
    {
        $result = $this->_orderDetailDal->Get($filter);
        return new SuccessDataResult($result);

    }

    /**
     * @param OrderDetail $orderDetail
     * @return Result
     */
    public function Add(OrderDetail $orderDetail): Result
    {
        $this->_orderDetailDal->Add($orderDetail);
        return new SuccessResult();
    }

    /**
     * @param $id
     * @param OrderDetail $updatedOrderDetail
     * @return Result
     */
    public function Update($id, OrderDetail $updatedOrderDetail): Result
    {
        $this->_orderDetailDal->Update($id, $updatedOrderDetail);
        return new SuccessResult();
    }

    /**
     * @param $id
     * @return Result
     */
    public function Delete($id): Result
    {
        $this->_orderDetailDal->Delete($id);
        return new SuccessResult();
    }
}
