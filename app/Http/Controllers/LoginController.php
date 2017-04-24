<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\LoginService;

class LoginController extends Controller
{

    protected $loginService;

    public function __construct(
        LoginService $loginService
        )
    {
        $this->loginService = $loginService;
    }

    public function getLoginPage(Request $request)
    {
        $data = $this->loginService->getLoginPage($request);
        return veiw();
    }

    public function login(Request $request)
    {
        $ret = $this->loginService->login($request);
        return $ret;
    }
}
