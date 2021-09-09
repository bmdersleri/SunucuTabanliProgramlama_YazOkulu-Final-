<?php

namespace App\Business\Abstracts;

use App\Core\Utilities\Results\DataResult;
use App\Core\Utilities\Results\Result;
use App\Entities\Concrete\Supplier;

interface ISupplierService
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
     * @param Supplier $supplier
     * @return Result
     */
    public function Add(Supplier $supplier): Result;

    /**
     * @param $id
     * @param Supplier $updatedSupplier
     * @return Result
     */
    public function Update($id, Supplier $updatedSupplier): Result;

    /**
     * @param $id
     * @return Result
     */
    public function Delete($id): Result;
}
