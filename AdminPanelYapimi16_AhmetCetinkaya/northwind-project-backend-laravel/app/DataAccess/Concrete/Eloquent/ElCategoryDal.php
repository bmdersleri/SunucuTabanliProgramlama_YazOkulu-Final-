<?php

namespace App\DataAccess\Concrete\Eloquent;

use App\Core\DataAccess\Abstracts\Eloquent\ElEntityRepositoryBase;
use App\DataAccess\Abstracts\ICategoryDal;
use App\DataAccess\Concrete\Eloquent\Models\CategoryModel;

class ElCategoryDal extends ElEntityRepositoryBase implements ICategoryDal
{
    public function __construct()
    {
        parent::__construct(new CategoryModel());
    }
}
