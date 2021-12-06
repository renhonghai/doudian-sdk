<?php

namespace AK\DoudianSDK\Entities\Http;

class HttpRequest
{

    public $url;
    public $body;

    public $connectTimeout;
    public $readTimeout;

    /**
     * @return mixed
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * @param mixed $url
     */
    public function setUrl($url): void
    {
        $this->url = $url;
    }

    /**
     * @return mixed
     */
    public function getBody()
    {
        return $this->body;
    }

    /**
     * @param mixed $body
     */
    public function setBody($body): void
    {
        $this->body = $body;
    }

    /**
     * @return mixed
     */
    public function getConnectTimeout()
    {
        return $this->connectTimeout;
    }

    /**
     * @param mixed $connectTimeout
     */
    public function setConnectTimeout($connectTimeout): void
    {
        $this->connectTimeout = $connectTimeout;
    }

    /**
     * @return mixed
     */
    public function getReadTimeout()
    {
        return $this->readTimeout;
    }

    /**
     * @param mixed $readTimeout
     */
    public function setReadTimeout($readTimeout): void
    {
        $this->readTimeout = $readTimeout;
    }

}