<?php

namespace App\Entities\Concrete;

use App\Core\Entities\Abstracts\IEntity;
use App\Core\Utilities\Entities\FromArray;
use App\Core\Utilities\Entities\GetPropertiesKeys;

class Category implements IEntity
{
    public int $CategoryID;
    public string $CategoryName;
    public ?string $Description;

    use FromArray,
        GetPropertiesKeys;
}
