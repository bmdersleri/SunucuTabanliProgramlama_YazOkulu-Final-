<?php

namespace App\DataAccess\Concrete\Eloquent;

use App\Core\DataAccess\Abstracts\Eloquent\ElEntityRepositoryBase;
use App\DataAccess\Abstracts\IRegionDal;
use App\DataAccess\Concrete\Eloquent\Models\RegionModel;

class ElRegionDal extends ElEntityRepositoryBase implements IRegionDal
{
    public function __construct()
    {
        parent::__construct(new RegionModel());
    }
}
