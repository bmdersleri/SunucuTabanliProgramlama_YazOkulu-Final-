<?php

namespace App\Business\Abstracts;

use App\Core\Utilities\Results\DataResult;
use App\Core\Utilities\Results\Result;
use App\Entities\Concrete\Region;

interface IRegionService
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
     * @param Region $region
     * @return Result
     */
    public function Add(Region $region): Result;

    /**
     * @param $id
     * @param Region $updatedRegion
     * @return Result
     */
    public function Update($id, Region $updatedRegion): Result;

    /**
     * @param $id
     * @return Result
     */
    public function Delete($id): Result;
}
