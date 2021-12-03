<?php

namespace Renhonghai\DoudianSDK\Entities;

use Renhonghai\DoudianSDK\Configs\DoudianOpenPlatform;

class DoudianOpConfig extends BaseEntity
{

    public $appKey;
    public $appSecret;

    public $httpConnectTimeout = DoudianOpenPlatform::OPEN_PLATFORM_HTTP_CONNECT_TIMEOUT;
    public $httpReadTimeout = DoudianOpenPlatform::OPEN_PLATFORM_HTTP_READ_TIMEOUT;
    public $openRequestUrl = DoudianOpenPlatform::OPEN_PLATFORM_REQUEST_URL;

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
    public function getAppSecret()
    {
        return $this->appSecret;
    }

    /**
     * @param mixed $appSecret
     */
    public function setAppSecret($appSecret): void
    {
        $this->appSecret = $appSecret;
    }

    /**
     * @return int
     */
    public function getHttpConnectTimeout(): int
    {
        return $this->httpConnectTimeout;
    }

    /**
     * @param int $httpConnectTimeout
     */
    public function setHttpConnectTimeout(int $httpConnectTimeout): void
    {
        $this->httpConnectTimeout = $httpConnectTimeout;
    }

    /**
     * @return int
     */
    public function getHttpReadTimeout(): int
    {
        return $this->httpReadTimeout;
    }

    /**
     * @param int $httpReadTimeout
     */
    public function setHttpReadTimeout(int $httpReadTimeout): void
    {
        $this->httpReadTimeout = $httpReadTimeout;
    }

    /**
     * @return string
     */
    public function getOpenRequestUrl(): string
    {
        return $this->openRequestUrl;
    }

    /**
     * @param string $openRequestUrl
     */
    public function setOpenRequestUrl(string $openRequestUrl): void
    {
        $this->openRequestUrl = $openRequestUrl;
    }

}