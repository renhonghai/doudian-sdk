<?php

namespace Renhonghai\DoudianSDK\Requests;

use Exception;
use Renhonghai\DoudianSDK\Core\DoudianOpClient;
use Renhonghai\DoudianSDK\Entities\AccessToken;
use Renhonghai\DoudianSDK\Entities\DoudianOpConfig;
use Renhonghai\DoudianSDK\GlobalConfig;

abstract class AbstractRequest
{

    private $param;

    /**
     * @var DoudianOpConfig
     */
    private $config;

    public function __construct()
    {
        $this->config = GlobalConfig::getGlobalConfig();
    }

    /**
     * @return mixed
     */
    public function getParam()
    {
        return $this->param;
    }

    /**
     * @param $param
     * @return $this
     */
    public function setParam($param): self
    {
        $this->param = $param;

        return $this;
    }

    /**
     * @return DoudianOpConfig
     */
    public function getConfig(): DoudianOpConfig
    {
        return $this->config;
    }

    /**
     * @param $config
     * @return $this
     */
    public function setConfig($config): self
    {
        $this->config = $config;

        return $this;
    }

    /**
     * 接口请求地址
     * @return string
     */
    abstract public function getUrlPath(): string;

    /**
     * 执行请求
     * @param AccessToken|null $accessToken
     * @return mixed
     * @throws Exception
     */
    public function execute(?AccessToken $accessToken)
    {
        return DoudianOpClient::getInstance()->request($this, $accessToken);
    }

}