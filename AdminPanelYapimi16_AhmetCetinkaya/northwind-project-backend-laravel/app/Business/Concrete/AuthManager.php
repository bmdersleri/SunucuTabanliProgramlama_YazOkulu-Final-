<?php

namespace App\Business\Concrete;

use App\Business\Abstracts\IAuthService;
use App\Core\Entities\Concrete\User;
use App\Core\Utilities\Results\DataResult;
use App\Core\Utilities\Results\ErrorDataResult;
use App\Core\Utilities\Results\ErrorResult;
use App\Core\Utilities\Results\Result;
use App\Core\Utilities\Results\SuccessDataResult;
use App\Core\Utilities\Results\SuccessResult;
use App\Core\Utilities\Security\JWT\AccessToken;
use App\DataAccess\Abstracts\IUserDal;
use App\Entities\DTOs\UserForRegisterDto;
use App\Entities\DTOs\UserTokenDto;
use Tymon\JWTAuth\Facades\JWTAuth;
use Validator;

class AuthManager implements IAuthService
{
    private IUserDal $_userDal;

    /**
     * @param IUserDal $userDal
     */
    public function __construct(IUserDal $userDal)
    {
        $this->_userDal = $userDal;
    }

    public function login(UserForRegisterDto $userForLoginDto): DataResult
    {
        $token = auth()->attempt((array)$userForLoginDto);
        if (!$token)
            return new ErrorDataResult(null, "Unauthorized");

        $userTokenDto = $this->createNewUserToken($token);
        return new SuccessDataResult($userTokenDto, "Successful Login.");
    }

    private function createNewUserToken(string $token = null): UserTokenDto
    {
        $user = auth()->user();
        $userEntity = User::fromArray(
            ["id" => $user->id, "name" => $user->name, "email" => $user->email]);
        $userRoles = array_column($user->roles()->get()->toArray(), "name");

        if (empty($token)) {
            $token = JWTAuth::refresh(JWTAuth::getToken());
            JWTAuth::setToken($token)->toUser();
        }

        $accessToken = new AccessToken($token, auth()->factory()->getTTL() * 60);
        return new UserTokenDto($userEntity, $userRoles, $accessToken);
    }

    public function register(UserForRegisterDto $userForRegisterDto): Result
    {
        $validator = Validator::make((array)$userForRegisterDto, [
            'name' => 'required|string|between:2,100',
            'email' => 'required|string|email|max:100|unique:users',
            'password' => 'required|string|confirmed|min:6',
        ]);
        if ($validator->fails())
            return new ErrorResult(implode(",", $validator->messages()->all()));

        $user = User::fromArray(array_merge(
            (array)$userForRegisterDto,
            ['password' => bcrypt($userForRegisterDto->password)]
        ));
        $this->_userDal->Add($user);

        return new SuccessResult("User successfully registered");
    }

    public function refresh(): DataResult
    {
        $userTokenDto = $this->createNewUserToken();
        return new SuccessDataResult($userTokenDto, "Login Refreshed.");
    }

    protected function createNewAccessToken($token): AccessToken
    {
        return new AccessToken($token, auth()->factory()->getTTL() * 60);
    }
}
