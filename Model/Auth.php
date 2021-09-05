<?php

namespace VirtusPay\VirtusPaySdkPhp\Model;

class Auth
{
    protected $token;

    public function setToken(string $token)
    {
        if (!$token) {
            return false;
        }
        $this->token = $token;
        return true;
    }

    public function getToken()
    {
        return $this->token;
    }
}
