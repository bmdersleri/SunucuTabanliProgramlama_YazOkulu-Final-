<?php

namespace App\Entities\DTOs;

use App\Core\Entities\Abstracts\IDto;
use App\Core\Entities\Concrete\User;
use App\Core\Utilities\Security\JWT\AccessToken;

class UserTokenDto implements IDto
{
    public User $User;
    public array $UserRoles;
    public AccessToken $accessToken;

    /**
     * @param User $User
     * @param array $UserRoles
     * @param AccessToken $accessToken
     */
    public function __construct(User $User, array $UserRoles, AccessToken $accessToken)
    {
        $this->User = $User;
        $this->UserRoles = $UserRoles;
        $this->accessToken = $accessToken;
    }
}
