<?php

namespace App\Business\Concrete;

use App\Business\Abstracts\IProductService;
use App\Core\Utilities\Results\DataResult;
use App\Core\Utilities\Results\Result;
use App\Core\Utilities\Results\SuccessDataResult;
use App\Core\Utilities\Results\SuccessResult;
use App\DataAccess\Abstracts\IProductDal;
use App\Entities\Concrete\Product;

class ProductManager implements IProductService
{
    private IProductDal $_productDal;

    /**
     * @param IProductDal $productDal
     */
    public function __construct(IProductDal $productDal)
    {
        $this->_productDal = $productDal;
    }

    /**
     * @param array|null $filter
     * @return DataResult
     */
    public function GetAll(?array $filter = null): DataResult
    {
        $result = $this->_productDal->GetAll($filter);
        return new SuccessDataResult($result);
    }

    /**
     * @param $id
     * @return DataResult
     */
    public function GetById($id): DataResult
    {
        $result = $this->_productDal->GetById($id);
        return new SuccessDataResult($result);
    }

    /**
     * @param array $filter
     * @return DataResult
     */
    public function Get(array $filter): DataResult
    {
        $result = $this->_productDal->Get($filter);
        return new SuccessDataResult($result);

    }

    /**
     * @param Product $product
     * @return Result
     */
    public function Add(Product $product): Result
    {
        $this->_productDal->Add($product);
        return new SuccessResult();
    }

    /**
     * @param $id
     * @param Product $updatedProduct
     * @return Result
     */
    public function Update($id, Product $updatedProduct): Result
    {
        $this->_productDal->Update($id, $updatedProduct);
        return new SuccessResult();
    }

    /**
     * @param $id
     * @return Result
     */
    public function Delete($id): Result
    {
        $this->_productDal->Delete($id);
        return new SuccessResult();
    }
}
