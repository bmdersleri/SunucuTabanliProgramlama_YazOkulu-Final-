<?php

namespace App\DataAccess\Concrete\Eloquent;

use App\Core\DataAccess\Abstracts\Eloquent\ElEntityRepositoryBase;
use App\DataAccess\Abstracts\IOrderDal;
use App\DataAccess\Concrete\Eloquent\Models\OrderModel;

class ElOrderDal extends ElEntityRepositoryBase implements IOrderDal
{
    public function __construct()
    {
        parent::__construct(new OrderModel());
    }
}
