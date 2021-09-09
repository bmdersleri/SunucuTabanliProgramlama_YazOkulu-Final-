<?php

namespace App\Entities\Concrete;

use App\Core\Entities\Abstracts\IEntity;
use App\Core\Utilities\Entities\FromArray;
use App\Core\Utilities\Entities\GetPropertiesKeys;

class Customer implements IEntity
{
    public string $CustomerID;
    public string $CompanyName;
    public ?string $ContactName;
    public ?string $ContactTitle;
    public ?string $Address;
    public ?string $City;
    public ?string $Region;
    public ?string $PostalCode;
    public ?string $Country;
    public ?string $Phone;
    public ?string $Fax;

    use FromArray,
        GetPropertiesKeys;
}
