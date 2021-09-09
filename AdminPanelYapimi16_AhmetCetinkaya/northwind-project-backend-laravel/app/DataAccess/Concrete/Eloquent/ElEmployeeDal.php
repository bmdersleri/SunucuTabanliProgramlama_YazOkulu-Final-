<?php

namespace App\DataAccess\Concrete\Eloquent;

use App\Core\DataAccess\Abstracts\Eloquent\ElEntityRepositoryBase;
use App\DataAccess\Abstracts\IEmployeeDal;
use App\DataAccess\Concrete\Eloquent\Models\EmployeeModel;

class ElEmployeeDal extends ElEntityRepositoryBase implements IEmployeeDal
{
    public function __construct()
    {
        parent::__construct(new EmployeeModel());
    }
}
