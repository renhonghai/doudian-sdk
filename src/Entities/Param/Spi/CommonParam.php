<?php

namespace AK\DoudianSDK\Entities\Param\Spi;

use AK\DoudianSDK\Entities\BaseEntity;

class CommonParam extends BaseEntity
{

    private $app_key;

    private $timestamp;

    private $sign;

    private $sign_method;

    private $param_json;

    /**
     * @return mixed
     */
    public function getAppKey()
    {
        return $this->app_key;
    }

    /**
     * @param mixed $app_key
     */
    public function setAppKey($app_key): void
    {
        $this->app_key = $app_key;
    }

    /**
     * @return mixed
     */
    public function getTimestamp()
    {
        return $this->timestamp;
    }

    /**
     * @param mixed $timestamp
     */
    public function setTimestamp($timestamp): void
    {
        $this->timestamp = $timestamp;
    }

    /**
     * @return mixed
     */
    public function getSign()
    {
        return $this->sign;
    }

    /**
     * @param mixed $sign
     */
    public function setSign($sign): void
    {
        $this->sign = $sign;
    }

    /**
     * @return mixed
     */
    public function getSignMethod()
    {
        return $this->sign_method;
    }

    /**
     * @param mixed $sign_method
     */
    public function setSignMethod($sign_method): void
    {
        $this->sign_method = $sign_method;
    }

    /**
     * @return mixed
     */
    public function getParamJson()
    {
        return $this->param_json;
    }

    /**
     * @param mixed $param_json
     */
    public function setParamJson($param_json): void
    {
        $this->param_json = $param_json;
    }

}