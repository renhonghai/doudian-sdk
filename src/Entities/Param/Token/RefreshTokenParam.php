<?php

namespace AK\DoudianSDK\Entities\Param\Token;

use AK\DoudianSDK\Entities\BaseEntity;

class RefreshTokenParam extends BaseEntity
{
    public $grant_type;

    public $refresh_token;

    /**
     * @return mixed
     */
    public function getGrantType()
    {
        return $this->grant_type;
    }

    /**
     * @param mixed $grant_type
     */
    public function setGrantType($grant_type): void
    {
        $this->grant_type = $grant_type;
    }

    /**
     * @return mixed
     */
    public function getRefreshToken()
    {
        return $this->refresh_token;
    }

    /**
     * @param mixed $refresh_token
     */
    public function setRefreshToken($refresh_token): void
    {
        $this->refresh_token = $refresh_token;
    }

}