<?php

namespace App\Business\Abstracts;

use App\Core\Utilities\Results\DataResult;
use App\Core\Utilities\Results\Result;
use App\Entities\Concrete\Territory;

interface ITerritoryService
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
     * @param Territory $territory
     * @return Result
     */
    public function Add(Territory $territory): Result;

    /**
     * @param $id
     * @param Territory $updatedTerritory
     * @return Result
     */
    public function Update($id, Territory $updatedTerritory): Result;

    /**
     * @param $id
     * @return Result
     */
    public function Delete($id): Result;
}
