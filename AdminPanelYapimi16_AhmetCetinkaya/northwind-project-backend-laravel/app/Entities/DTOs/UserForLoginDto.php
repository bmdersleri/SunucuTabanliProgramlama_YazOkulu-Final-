<?php

namespace App\Entities\DTOs;

use App\Core\Entities\Abstracts\IDto;
use App\Core\Utilities\Entities\FromArray;
use App\Core\Utilities\Entities\GetPropertiesKeys;

class UserForLoginDto implements IDto
{
    public string $email;
    public string $password;

    use FromArray,
        GetPropertiesKeys;
}
