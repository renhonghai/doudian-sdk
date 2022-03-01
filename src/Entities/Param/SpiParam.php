<?php

namespace AK\DoudianSDK\Entities\Param;

use AK\DoudianSDK\Entities\BaseEntity;

class SpiParam extends BaseEntity
{

    private $appKey;

    private $timestamp;

    private $sign;

    private $signV2;

    private $signMethod;

    private $paramJson;

    /**
     * @return mixed
     */
    public function getAppKey()
    {
        return $this->appKey;
    }

    /**
     * @param mixed $appKey
     */
    public function setAppKey($appKey): void
    {
        $this->appKey = $appKey;
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
    public function getSignV2()
    {
        return $this->signV2;
    }

    /**
     * @param mixed $signV2
     */
    public function setSignV2($signV2): void
    {
        $this->signV2 = $signV2;
    }

    /**
     * @return mixed
     */
    public function getSignMethod()
    {
        return $this->signMethod;
    }

    /**
     * @param mixed $signMethod
     */
    public function setSignMethod($signMethod): void
    {
        $this->signMethod = $signMethod;
    }

    /**
     * @return mixed
     */
    public function getParamJson()
    {
        return $this->paramJson;
    }

    /**
     * @param mixed $paramJson
     */
    public function setParamJson($paramJson): void
    {
        $this->paramJson = $paramJson;
    }

}