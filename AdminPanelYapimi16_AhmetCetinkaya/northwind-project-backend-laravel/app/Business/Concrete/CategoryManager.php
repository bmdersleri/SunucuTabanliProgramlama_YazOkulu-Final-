<?php

namespace App\Business\Concrete;

use App\Business\Abstracts\ICategoryService;
use App\Core\Utilities\Results\DataResult;
use App\Core\Utilities\Results\Result;
use App\Core\Utilities\Results\SuccessDataResult;
use App\Core\Utilities\Results\SuccessResult;
use App\DataAccess\Abstracts\ICategoryDal;
use App\Entities\Concrete\Category;

class CategoryManager implements ICategoryService
{
    private ICategoryDal $_categoryDal;

    /**
     * @param ICategoryDal $categoryDal
     */
    public function __construct(ICategoryDal $categoryDal)
    {
        $this->_categoryDal = $categoryDal;
    }

    /**
     * @param array|null $filter
     * @return DataResult
     */
    public function GetAll(?array $filter = null): DataResult
    {
        $result = $this->_categoryDal->GetAll($filter);
        return new SuccessDataResult($result);
    }

    /**
     * @param $id
     * @return DataResult
     */
    public function GetById($id): DataResult
    {
        $result = $this->_categoryDal->GetById($id);
        return new SuccessDataResult($result);
    }

    /**
     * @param array $filter
     * @return DataResult
     */
    public function Get(array $filter): DataResult
    {
        $result = $this->_categoryDal->Get($filter);
        return new SuccessDataResult($result);

    }

    /**
     * @param Category $category
     * @return Result
     */
    public function Add(Category $category): Result
    {
        $this->_categoryDal->Add($category);
        return new SuccessResult();
    }

    /**
     * @param $id
     * @param Category $updatedCategory
     * @return Result
     */
    public function Update($id, Category $updatedCategory): Result
    {
        $this->_categoryDal->Update($id, $updatedCategory);
        return new SuccessResult();
    }

    /**
     * @param $id
     * @return Result
     */
    public function Delete($id): Result
    {
        $this->_categoryDal->Delete($id);
        return new SuccessResult();
    }
}
