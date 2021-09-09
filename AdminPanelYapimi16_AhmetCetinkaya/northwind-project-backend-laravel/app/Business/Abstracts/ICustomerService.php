<?php

namespace App\Business\Abstracts;

use App\Core\Utilities\Results\DataResult;
use App\Core\Utilities\Results\Result;
use App\Entities\Concrete\Customer;

interface ICustomerService
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
     * @param Customer $customer
     * @return Result
     */
    public function Add(Customer $customer): Result;

    /**
     * @param $id
     * @param Customer $updatedCustomer
     * @return Result
     */
    public function Update($id, Customer $updatedCustomer): Result;

    /**
     * @param $id
     * @return Result
     */
    public function Delete($id): Result;
}
