<?php

namespace App\Business\Abstracts;

use App\Core\Utilities\Results\DataResult;
use App\Core\Utilities\Results\Result;
use App\Entities\Concrete\Product;

interface IProductService
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
     * @param Product $product
     * @return Result
     */
    public function Add(Product $product): Result;

    /**
     * @param $id
     * @param Product $updatedProduct
     * @return Result
     */
    public function Update($id, Product $updatedProduct): Result;

    /**
     * @param $id
     * @return Result
     */
    public function Delete($id): Result;
}
