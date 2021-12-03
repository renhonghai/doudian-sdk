<?php

namespace Renhonghai\DoudianSDK\Core;

use Exception;
use Renhonghai\DoudianSDK\Entities\AccessToken;
use Renhonghai\DoudianSDK\Entities\Http\HttpRequest;
use Renhonghai\DoudianSDK\Requests\AbstractRequest;
use Renhonghai\DoudianSDK\Utils\HttpClientUtil;
use Renhonghai\DoudianSDK\Utils\SignUtil;

class DoudianOpClient
{
    private static $defaultInstance;

    private $httpClient;

    private function __construct()
    {
        $this->httpClient = HttpClientUtil::getInstance();
    }

    private function __clone() {}

    /**
     * @param AbstractRequest $request
     * @param AccessToken | null $accessToken
     * @return mixed
     * @throws Exception
     */
    public function request(AbstractRequest $request, ?AccessToken $accessToken = null)
    {
        $config = $request->getConfig();
        $urlPath = $request->getUrlPath();
        $method = $this->getMethod($urlPath);
        $paramJson = SignUtil::marshal($request->getParam());
        $appKey = $config->appKey;
        $appSecret = $config->appSecret;
        $timestamp = time();
        $sign = SignUtil::sign($appKey, $appSecret, $method, $timestamp, $paramJson);
        $openHost = $config->openRequestUrl;
        $accessTokenStr = "";
        if ($accessToken != null) {
            $accessTokenStr = $accessToken->getAccessToken();
        }

        //String requestUrlPattern = "%s/%s?app_key=%s&method=%s&v=2&sign=%s&timestamp=%s&access_token=%s";
        $requestUrl = $openHost.$urlPath."?"."app_key=".$appKey."&method=".$method."&v=2&sign=".$sign."&timestamp=".$timestamp."&access_token=".$accessTokenStr."&sign_method=hmac-sha256";

        //发送http请求
        $httpRequest = new HttpRequest();
        $httpRequest->url = $requestUrl;
        $httpRequest->body = $paramJson;
        $httpRequest->connectTimeout = $config->httpConnectTimeout;
        $httpRequest->readTimeout = $config->httpReadTimeout;
        $httpResponse = $this->httpClient->post($httpRequest);

        return json_decode($httpResponse->body, false, 512, JSON_UNESCAPED_UNICODE);
    }

    private function getMethod($urlPath)
    {
        if (strlen($urlPath) == 0) {
            return $urlPath;
        }

        if (substr($urlPath, 0, 1) == "/") {
            $methodPath = substr($urlPath, 1, strlen($urlPath));
        } else {
            $methodPath = $urlPath;
        }

        return str_replace("/", ".", $methodPath);
    }


    public static function getInstance(): DoudianOpClient
    {
        if (!(self::$defaultInstance instanceof self)) {
            self::$defaultInstance = new self();
        }

        return self::$defaultInstance;
    }

}