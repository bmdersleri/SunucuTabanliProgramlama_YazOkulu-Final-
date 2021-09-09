<?php

namespace App\Entities\Concrete;

use App\Core\Entities\Abstracts\IEntity;
use App\Core\Utilities\Entities\FromArray;
use App\Core\Utilities\Entities\GetPropertiesKeys;

class Order implements IEntity
{
    public int $OrderID;
    public ?string $CustomerID;
    public ?float $EmployeeID;
    public ?string $OrderDate;
    public ?string $RequiredDate;
    public ?string $ShippedDate;
    public ?int $ShipVia;
    public ?float $Freight;
    public ?string $ShipName;
    public ?string $ShipAddress;
    public ?string $ShipCity;
    public ?string $ShipRegion;
    public ?string $ShipPostalCode;
    public ?string $ShipCountry;


    use FromArray,
        GetPropertiesKeys;
}
