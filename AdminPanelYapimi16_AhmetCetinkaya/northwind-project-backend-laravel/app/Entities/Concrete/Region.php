<?php

namespace App\Entities\Concrete;

use App\Core\Entities\Abstracts\IEntity;
use App\Core\Utilities\Entities\FromArray;
use App\Core\Utilities\Entities\GetPropertiesKeys;

class Region implements IEntity
{
    public int $RegionID;
    public string $RegionDescription;

    use FromArray,
        GetPropertiesKeys;
}
