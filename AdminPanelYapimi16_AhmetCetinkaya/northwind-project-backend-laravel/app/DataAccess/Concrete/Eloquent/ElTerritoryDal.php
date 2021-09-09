<?php

namespace App\DataAccess\Concrete\Eloquent;

use App\Core\DataAccess\Abstracts\Eloquent\ElEntityRepositoryBase;
use App\DataAccess\Abstracts\ITerritoryDal;
use App\DataAccess\Concrete\Eloquent\Models\TerritoryModel;

class ElTerritoryDal extends ElEntityRepositoryBase implements ITerritoryDal
{
    public function __construct()
    {
        parent::__construct(new TerritoryModel());
    }
}
