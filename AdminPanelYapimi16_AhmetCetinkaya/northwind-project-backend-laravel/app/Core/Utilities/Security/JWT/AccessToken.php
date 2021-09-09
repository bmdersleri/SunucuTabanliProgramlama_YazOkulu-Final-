<?php

namespace App\Core\Utilities\Security\JWT;

class AccessToken
{
    public string $Token;
    public int $Expiration;
    public int $CreatedAt;

    /**
     * @param string $Token
     * @param int $Expiration
     * @param int|null $CreatedAt
     */
    public function __construct(string $Token, int $Expiration, int $CreatedAt = null)
    {
        $this->Token = $Token;
        $this->Expiration = $Expiration;
        $this->CreatedAt = $CreatedAt ?? time();
    }


}
