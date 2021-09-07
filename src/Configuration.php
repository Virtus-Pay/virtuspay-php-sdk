<?php

namespace VirtusPay\ApiSDK;


class Configuration
{

    const PRODUCTION_URL = 'https://core.usevirtus.com.br/api/';

    const HOMOLOG_URL = 'https://hml.usevirtus.com.br/api/';

    const TOKEN = '4933f50a8a07a9f2a7b564eaac0b186ea0434bff';

    private $environment = 'homolog';

    public function setEnvironment(string $environment)
    {
        $this->environment = $environment;
    }

    public function getBaseUrl()
    {
        if ($this->environment == 'homolog') {
            return self::HOMOLOG_URL;
        }

        return self::PRODUCTION_URL;
    }
}