<?php

namespace App\Entities\Concrete;

use App\Core\Entities\Abstracts\IEntity;
use App\Core\Utilities\Entities\FromArray;
use App\Core\Utilities\Entities\GetPropertiesKeys;

class Employee implements IEntity
{
    public int $EmployeeID;
    public string $FirstName;
    public string $LastName;
    public ?string $Title;
    public ?string $TitleOfCourtesy;
    public ?string $BirthDate;
    public ?string $HireDate;
    public ?string $Address;
    public ?string $City;
    public ?string $Region;
    public ?string $PostalCode;
    public ?string $Country;
    public ?string $HomePhone;
    public ?string $Extension;
    public string $Notes;
    public ?int $ReportsTo;
    public ?float $Salary;

    use FromArray,
        GetPropertiesKeys;
}
