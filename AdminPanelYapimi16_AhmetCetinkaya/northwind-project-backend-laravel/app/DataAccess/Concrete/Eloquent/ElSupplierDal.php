<?php

namespace App\DataAccess\Concrete\Eloquent;

use App\Core\DataAccess\Abstracts\Eloquent\ElEntityRepositoryBase;
use App\DataAccess\Abstracts\ISupplierDal;
use App\DataAccess\Concrete\Eloquent\Models\SupplierModel;

class ElSupplierDal extends ElEntityRepositoryBase implements ISupplierDal
{
    public function __construct()
    {
        parent::__construct(new SupplierModel());
    }
}
