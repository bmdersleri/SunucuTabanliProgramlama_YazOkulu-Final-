<?php

namespace App\Entities\Concrete;

use App\Core\Entities\Abstracts\IEntity;
use App\Core\Utilities\Entities\FromArray;
use App\Core\Utilities\Entities\GetPropertiesKeys;

class Territory implements IEntity
{
    public string $TerritoryID;
    public string $TerritoryDescription;
    public int $RegionID;

    use FromArray,
        GetPropertiesKeys;
}
