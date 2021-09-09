<?php

namespace App\Entities\Concrete;

use App\Core\Entities\Abstracts\IEntity;
use App\Core\Utilities\Entities\FromArray;
use App\Core\Utilities\Entities\GetPropertiesKeys;

class EmployeeTerritory implements IEntity
{
    public int $EmployeeID;
    public string $TerritoryID;

    use FromArray,
        GetPropertiesKeys;
}
