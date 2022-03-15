<?php

namespace AK\DoudianSDK\Requests;

use AK\DoudianSDK\Core\DoudianOpSpiClient;
use AK\DoudianSDK\Entities\DoudianOpConfig;
use AK\DoudianSDK\Entities\DoudianOpSpiResponse;
use AK\DoudianSDK\Entities\Param\Spi\SpiParam;

class DoudianOpSpiRequest
{

    private $spiParam;

    private $spiClient;

    private $bizHandler;

    private $config;

    public function __construct($appKey, $appSecret)
    {
        $this->spiParam = new SpiParam();
        $this->spiClient = DoudianOpSpiClient::getInstance();
        $this->config = new DoudianOpConfig();

        $this->config->setAppKey($appKey);
        $this->config->setAppSecret($appSecret);
    }

    /**
     * @return SpiParam
     */
    public function getSpiParam(): SpiParam
    {
        return $this->spiParam;
    }

    /**
     * @param SpiParam $spiParam
     */
    public function setSpiParam(SpiParam $spiParam): void
    {
        $this->spiParam = $spiParam;
    }

    /**
     * @return DoudianOpSpiClient
     */
    public function getSpiClient(): DoudianOpSpiClient
    {
        return $this->spiClient;
    }

    /**
     * @param DoudianOpSpiClient $spiClient
     */
    public function setSpiClient(DoudianOpSpiClient $spiClient): void
    {
        $this->spiClient = $spiClient;
    }

    /**
     * @return DoudianOpConfig
     */
    public function getConfig(): DoudianOpConfig
    {
        return $this->config;
    }

    /**
     * @param DoudianOpConfig $config
     */
    public function setConfig(DoudianOpConfig $config): void
    {
        $this->config = $config;
    }

    public function registerHandler($bizHandler){
        $this->bizHandler = $bizHandler;
    }

    public function execute(): DoudianOpSpiResponse
    {
        return $this->spiClient->request($this, $this->bizHandler);
    }

}