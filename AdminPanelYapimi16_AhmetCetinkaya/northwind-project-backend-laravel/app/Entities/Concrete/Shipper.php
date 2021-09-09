<?php

namespace App\Entities\Concrete;

use App\Core\Entities\Abstracts\IEntity;
use App\Core\Utilities\Entities\FromArray;
use App\Core\Utilities\Entities\GetPropertiesKeys;

class Shipper implements IEntity
{
    public int $ShipperID;
    public string $CompanyName;
    public ?string $Phone;

    use FromArray,
        GetPropertiesKeys;
}
