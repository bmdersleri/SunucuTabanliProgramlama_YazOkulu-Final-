<?php

namespace App\Business\Abstracts;

use App\Core\Utilities\Results\DataResult;
use App\Core\Utilities\Results\Result;
use App\Entities\Concrete\Category;

interface ICategoryService
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
     * @param Category $category
     * @return Result
     */
    public function Add(Category $category): Result;

    /**
     * @param $id
     * @param Category $updatedCategory
     * @return Result
     */
    public function Update($id, Category $updatedCategory): Result;

    /**
     * @param $id
     * @return Result
     */
    public function Delete($id): Result;
}
