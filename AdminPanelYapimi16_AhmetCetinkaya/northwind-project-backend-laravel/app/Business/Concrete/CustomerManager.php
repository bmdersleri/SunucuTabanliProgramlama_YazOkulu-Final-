<?php

namespace App\Business\Concrete;

use App\Business\Abstracts\ICustomerService;
use App\Core\Utilities\Results\DataResult;
use App\Core\Utilities\Results\Result;
use App\Core\Utilities\Results\SuccessDataResult;
use App\Core\Utilities\Results\SuccessResult;
use App\DataAccess\Abstracts\ICustomerDal;
use App\Entities\Concrete\Customer;

class CustomerManager implements ICustomerService
{
    private ICustomerDal $_customerDal;

    /**
     * @param ICustomerDal $customerDal
     */
    public function __construct(ICustomerDal $customerDal)
    {
        $this->_customerDal = $customerDal;
    }

    /**
     * @param array|null $filter
     * @return DataResult
     */
    public function GetAll(?array $filter = null): DataResult
    {
        $result = $this->_customerDal->GetAll($filter);
        return new SuccessDataResult($result);
    }

    /**
     * @param $id
     * @return DataResult
     */
    public function GetById($id): DataResult
    {
        $result = $this->_customerDal->GetById($id);
        return new SuccessDataResult($result);
    }

    /**
     * @param array $filter
     * @return DataResult
     */
    public function Get(array $filter): DataResult
    {
        $result = $this->_customerDal->Get($filter);
        return new SuccessDataResult($result);

    }

    /**
     * @param Customer $customer
     * @return Result
     */
    public function Add(Customer $customer): Result
    {
        $this->_customerDal->Add($customer);
        return new SuccessResult();
    }

    /**
     * @param $id
     * @param Customer $updatedCustomer
     * @return Result
     */
    public function Update($id, Customer $updatedCustomer): Result
    {
        $this->_customerDal->Update($id, $updatedCustomer);
        return new SuccessResult();
    }

    /**
     * @param $id
     * @return Result
     */
    public function Delete($id): Result
    {
        $this->_customerDal->Delete($id);
        return new SuccessResult();
    }
}
