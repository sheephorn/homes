<?php

namespace App\Services;

use App\Services\BaseService;

class LoginService extends BaseService
{
    protected $abcRepository;

    public function __construct(
        LoginService $loginService
        )
    {
        $this->loginService = $loginService;
    }

    public function getLoginPage($condition)
    {
        //
    }

    public function login($condition)
    {
        // googleAuthのAPIを叩く
        // 返り値　$auth
    }
}
