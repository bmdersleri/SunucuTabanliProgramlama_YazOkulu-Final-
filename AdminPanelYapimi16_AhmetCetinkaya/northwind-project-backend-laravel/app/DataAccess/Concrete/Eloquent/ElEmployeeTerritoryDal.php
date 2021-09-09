<?php

namespace App\DataAccess\Concrete\Eloquent;

use App\Core\DataAccess\Abstracts\Eloquent\ElEntityRepositoryBase;
use App\DataAccess\Abstracts\IEmployeeTerritoryDal;
use App\DataAccess\Concrete\Eloquent\Models\EmployeeTerritoryModel;

class ElEmployeeTerritoryDal extends ElEntityRepositoryBase implements IEmployeeTerritoryDal
{
    public function __construct()
    {
        parent::__construct(new EmployeeTerritoryModel());
    }
}
