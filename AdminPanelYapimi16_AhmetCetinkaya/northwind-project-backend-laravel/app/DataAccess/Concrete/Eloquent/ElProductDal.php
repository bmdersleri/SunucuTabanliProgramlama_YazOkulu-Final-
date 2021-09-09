<?php

namespace App\DataAccess\Concrete\Eloquent;

use App\Core\DataAccess\Abstracts\Eloquent\ElEntityRepositoryBase;
use App\DataAccess\Abstracts\IProductDal;
use App\DataAccess\Concrete\Eloquent\Models\ProductModel;

class ElProductDal extends ElEntityRepositoryBase implements IProductDal
{
    public function __construct()
    {
        parent::__construct(new ProductModel());
    }
}
