<?php

namespace App\Http\Middleware;

use App\Core\Utilities\Results\ErrorResult;
use Closure;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Tymon\JWTAuth\Exceptions\JWTException;
use Tymon\JWTAuth\Exceptions\TokenExpiredException;
use Tymon\JWTAuth\Exceptions\TokenInvalidException;
use Tymon\JWTAuth\Facades\JWTAuth;

class SecuredOperation
{
    /**
     * Handle an incoming request.
     *
     * @param Request $request
     * @param Closure $next
     * @param mixed ...$roles
     * @return mixed
     */
    public function handle(Request $request, Closure $next, ...$roles)
    {
        try {
            $token = JWTAuth::parseToken();
            $user = $token->authenticate();
        } catch (TokenExpiredException $e) {
            return $this->unauthorized('Your token has expired. Please, login again.');
        } catch (TokenInvalidException $e) {
            return $this->unauthorized('Your token is invalid. Please, login again.');
        } catch (JWTException $e) {
            return $this->unauthorized('Please, attach a Bearer Token to your request');
        }

        $userRoleNames = array_column($user->roles()->get()->toArray(), "name");
        foreach ($userRoleNames as $userRoleName)
            if (in_array($userRoleName, $roles, true))
                return $next($request);

        return $this->unauthorized('You are unauthorized to access this operation');
    }

    private function unauthorized($message = null): JsonResponse
    {
        return response()->json(
            (array)new ErrorResult($message),
            401);
    }
}
