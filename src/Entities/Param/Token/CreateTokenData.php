<?php

namespace Renhonghai\DoudianSDK\Entities\Param\Token;

class CreateTokenData
{

    public $access_token;

    /**
     * @return mixed
     */
    public function getAccessToken()
    {
        return $this->access_token;
    }

    /**
     * @param mixed $access_token
     */
    public function setAccessToken($access_token): void
    {
        $this->access_token = $access_token;
    }

}