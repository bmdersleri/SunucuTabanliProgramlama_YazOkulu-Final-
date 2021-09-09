<?php

namespace App\Core\Entities\Concrete;

use App\Core\Entities\Abstracts\IEntity;
use App\Core\Utilities\Entities\FromArray;
use App\Core\Utilities\Entities\GetPropertiesKeys;

class User implements IEntity
{
    public int $id;
    public string $name;
    public string $email;
    public string $email_verified_at;
    public string $password;
    public string $remember_token;
    public string $created_at;
    public string $updated_at;

    use FromArray,
        GetPropertiesKeys;
}
