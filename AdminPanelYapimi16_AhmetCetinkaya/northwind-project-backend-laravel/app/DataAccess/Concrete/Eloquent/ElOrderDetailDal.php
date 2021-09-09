<?php

namespace App\DataAccess\Concrete\Eloquent;

use App\Core\DataAccess\Abstracts\Eloquent\ElEntityRepositoryBase;
use App\DataAccess\Abstracts\IOrderDetailDal;
use App\DataAccess\Concrete\Eloquent\Models\OrderDetailModel;

class ElOrderDetailDal extends ElEntityRepositoryBase implements IOrderDetailDal
{
    public function __construct()
    {
        parent::__construct(new OrderDetailModel());
    }
}
