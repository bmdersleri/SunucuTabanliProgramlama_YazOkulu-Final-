<?php

namespace App\DataAccess\Concrete\Eloquent;

use App\Core\DataAccess\Abstracts\Eloquent\ElEntityRepositoryBase;
use App\DataAccess\Abstracts\IShipperDal;
use App\DataAccess\Concrete\Eloquent\Models\ShipperModel;

class ElShipperDal extends ElEntityRepositoryBase implements IShipperDal
{
    public function __construct()
    {
        parent::__construct(new ShipperModel());
    }
}
