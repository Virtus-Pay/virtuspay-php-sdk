<?php

namespace VirtusPay\VirtusPaySdkPhp\Controller;

class Quote
{
    protected $token;
    protected $total_amount;

    protected $auth;

    public function __construct(
        \VirtusPay\VirtusPaySdkPhp\Model\Auth $auth
    ) {
        $this->auth = $auth;
    }

    public function getInstallments()
    {
        $headers = [
            'Authorization: Token ' . $this->auth->getToken(),
            'Content-Type: application/json',
            'Accept-Charset: utf-8'
        ];
        $ch = curl_init();

        curl_setopt($ch,CURLOPT_HEADER,$headers);
    }
    protected function getTotalAmount()
    {
        if(!$this->total_amount) {
            throw new Exception('Invalid amount');
        }
    }
    public function setTotalAmount(int $amount)
    {
        $this->total_amount = $amount;
    }
    public function setToken(string $token)
    {
        $this->token = $token;
    }
    public function auth(string $token)
    {
        $this->setToken($token);
    }


}
