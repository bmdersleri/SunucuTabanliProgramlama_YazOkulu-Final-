<?php

namespace App\Entities\Concrete;

use App\Core\Entities\Abstracts\IEntity;
use App\Core\Utilities\Entities\FromArray;
use App\Core\Utilities\Entities\GetPropertiesKeys;

class OrderDetail implements IEntity
{
    public int $OrderID;
    public int $ProductID;
    public float $UnitPrice;
    public int $Quantity;
    public float $Discount;


    use FromArray,
        GetPropertiesKeys;
}
