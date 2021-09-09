<?php

namespace App\Entities\Concrete;

use App\Core\Entities\Abstracts\IEntity;
use App\Core\Utilities\Entities\FromArray;
use App\Core\Utilities\Entities\GetPropertiesKeys;

class Product implements IEntity
{
    public int $ProductID;
    public string $ProductName;
    public ?int $SupplierID;
    public ?int $CategoryID;
    public ?string $QuantityPerUnit;
    public ?float $UnitPrice;
    public ?int $UnitsInStock;
    public ?int $UnitsOnOrder;
    public ?int $ReorderLevel;
    public bool $Discontinued;

    use FromArray,
        GetPropertiesKeys;
}
