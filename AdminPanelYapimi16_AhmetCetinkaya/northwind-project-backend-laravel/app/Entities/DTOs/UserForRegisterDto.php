<?php

namespace App\Entities\DTOs;

use App\Core\Entities\Abstracts\IDto;
use App\Core\Utilities\Entities\FromArray;
use App\Core\Utilities\Entities\GetPropertiesKeys;

class UserForRegisterDto implements IDto
{
    public string $name;
    public string $email;
    public string $password;
    public string $password_confirmation;

    use FromArray,
        GetPropertiesKeys;
}
