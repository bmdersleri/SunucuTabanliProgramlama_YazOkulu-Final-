<?php

namespace App\Http\Controllers;

use App\Business\Abstracts\IAuthService;
use App\Entities\DTOs\UserForRegisterDto;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    private IAuthService $_authService;

    /**
     * @param IAuthService $authService
     */
    public function __construct(IAuthService $authService)
    {
        $this->_authService = $authService;
    }

    /**
     * @param Request $request
     * @return JsonResponse
     */
    public function login(Request $request): JsonResponse
    {
        $userForLoginDto = UserForRegisterDto::fromArray($request->all());

        $result = $this->_authService->login($userForLoginDto);
        if (!$result->Success) return response()->json((array)$result, 401);

        return response()->json((array)$result);
    }

    /**
     * @param Request $request
     * @return JsonResponse
     */
    public function register(Request $request): JsonResponse
    {
        $userForLoginDto = UserForRegisterDto::fromArray($request->all());

        $result = $this->_authService->register($userForLoginDto);
        if (!$result->Success) return response()->json((array)$result, 400);

        return response()->json((array)$result, 201);
    }

    public function refresh(): JsonResponse
    {
        $result = $this->_authService->refresh();
        if (!$result->Success) return response()->json((array)$result, 401);

        return response()->json((array)$result, 201);
    }
}
