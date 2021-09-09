<?php

namespace App\Business\Abstracts;

use App\Core\Utilities\Results\DataResult;
use App\Core\Utilities\Results\Result;
use App\Entities\DTOs\UserForRegisterDto;

interface IAuthService
{
    public function login(UserForRegisterDto $userForLoginDto): DataResult;

    public function register(UserForRegisterDto $userForRegisterDto): Result;

    public function refresh(): DataResult;
}
