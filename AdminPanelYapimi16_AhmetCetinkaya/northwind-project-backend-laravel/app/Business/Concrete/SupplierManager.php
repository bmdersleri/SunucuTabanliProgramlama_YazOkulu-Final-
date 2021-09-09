<?php

namespace App\Business\Concrete;

use App\Business\Abstracts\ISupplierService;
use App\Core\Utilities\Results\DataResult;
use App\Core\Utilities\Results\Result;
use App\Core\Utilities\Results\SuccessDataResult;
use App\Core\Utilities\Results\SuccessResult;
use App\DataAccess\Abstracts\ISupplierDal;
use App\Entities\Concrete\Supplier;

class SupplierManager implements ISupplierService
{
    private ISupplierDal $_supplierDal;

    /**
     * @param ISupplierDal $supplierDal
     */
    public function __construct(ISupplierDal $supplierDal)
    {
        $this->_supplierDal = $supplierDal;
    }

    /**
     * @param array|null $filter
     * @return DataResult
     */
    public function GetAll(?array $filter = null): DataResult
    {
        $result = $this->_supplierDal->GetAll($filter);
        return new SuccessDataResult($result);
    }

    /**
     * @param $id
     * @return DataResult
     */
    public function GetById($id): DataResult
    {
        $result = $this->_supplierDal->GetById($id);
        return new SuccessDataResult($result);
    }

    /**
     * @param array $filter
     * @return DataResult
     */
    public function Get(array $filter): DataResult
    {
        $result = $this->_supplierDal->Get($filter);
        return new SuccessDataResult($result);

    }

    /**
     * @param Supplier $supplier
     * @return Result
     */
    public function Add(Supplier $supplier): Result
    {
        $this->_supplierDal->Add($supplier);
        return new SuccessResult();
    }

    /**
     * @param $id
     * @param Supplier $updatedSupplier
     * @return Result
     */
    public function Update($id, Supplier $updatedSupplier): Result
    {
        $this->_supplierDal->Update($id, $updatedSupplier);
        return new SuccessResult();
    }

    /**
     * @param $id
     * @return Result
     */
    public function Delete($id): Result
    {
        $this->_supplierDal->Delete($id);
        return new SuccessResult();
    }
}
