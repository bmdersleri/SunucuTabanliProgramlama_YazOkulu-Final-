<?php

namespace App\DataAccess\Concrete\Eloquent;

use App\Core\DataAccess\Abstracts\Eloquent\ElEntityRepositoryBase;
use App\DataAccess\Abstracts\ICustomerDal;
use App\DataAccess\Concrete\Eloquent\Models\CustomerModel;

class ElCustomerDal extends ElEntityRepositoryBase implements ICustomerDal
{
    public function __construct()
    {
        parent::__construct(new CustomerModel());
    }
}
