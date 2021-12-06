<?php

namespace AK\DoudianSDK\Requests;

use AK\DoudianSDK\Constants\ErrNoConstant;
use AK\DoudianSDK\Entities\DoudianOpResponse;
use AK\DoudianSDK\Exceptions\DoudianSDKException;
use Exception;
use AK\DoudianSDK\Core\DoudianOpClient;
use AK\DoudianSDK\Entities\AccessToken;
use AK\DoudianSDK\Entities\DoudianOpConfig;
use AK\DoudianSDK\GlobalConfig;

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
     * @throws DoudianSDKException
     */
    public function execute(?AccessToken $accessToken)
    {
        try {
            $response = DoudianOpClient::getInstance()->request($this, $accessToken);
            $doudianOpResponse = new DoudianOpResponse($response);

            if (ErrNoConstant::ERR_NO_SUCCESS !== $doudianOpResponse->getCode()) {
                throw new DoudianSDKException(
                    $doudianOpResponse->getCode(),
                    $doudianOpResponse->getSubCode(),
                    $doudianOpResponse->getMsg(),
                    $doudianOpResponse->getSubMsg()
                );
            }

            return $doudianOpResponse->getData();
        } catch (Exception $e) {
            throw new DoudianSDKException($e->getCode(), $e->getMessage());
        }
    }

}