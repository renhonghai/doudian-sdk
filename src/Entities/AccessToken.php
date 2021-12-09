<?php

namespace AK\DoudianSDK\Entities;

class AccessToken extends BaseEntity
{
    const ACCESS_TOKEN_CODE = 1;
    const ACCESS_TOKEN_SHOP_ID = 2;

    private $access_token;

    private $expires_in;

    private $refresh_token;

    private $scope;

    private $shop_id;

    private $shop_name;

    public static function wrap($resp): AccessToken
    {
        return new AccessToken($resp);
    }

    public function getAccessToken()
    {
        return $this->access_token;
    }

    public function getExpireIn()
    {
        return $this->expires_in;
    }

    public function getRefreshToken()
    {
        return $this->refresh_token;
    }

    public function getScope()
    {
        return $this->scope;
    }

    public function getShopId()
    {
        return $this->shop_id;
    }

    public function getShopName()
    {
        return $this->shop_name;
    }

    /**
     * @param mixed $access_token
     */
    public function setAccessToken($access_token): void
    {
        $this->access_token = $access_token;
    }

    /**
     * @param mixed $expires_in
     */
    public function setExpiresIn($expires_in): void
    {
        $this->expires_in = $expires_in;
    }

    /**
     * @param mixed $refresh_token
     */
    public function setRefreshToken($refresh_token): void
    {
        $this->refresh_token = $refresh_token;
    }

    /**
     * @param mixed $scope
     */
    public function setScope($scope): void
    {
        $this->scope = $scope;
    }

    /**
     * @param mixed $shop_id
     */
    public function setShopId($shop_id): void
    {
        $this->shop_id = $shop_id;
    }

    /**
     * @param mixed $shop_name
     */
    public function setShopName($shop_name): void
    {
        $this->shop_name = $shop_name;
    }

}