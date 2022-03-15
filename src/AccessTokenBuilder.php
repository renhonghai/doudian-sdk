<?php

namespace AK\DoudianSDK;

use AK\DoudianSDK\Entities\DoudianOpConfig;
use Exception;
use AK\DoudianSDK\Entities\AccessToken;
use AK\DoudianSDK\Entities\Param\Token\CreateTokenParam;
use AK\DoudianSDK\Entities\Param\Token\RefreshTokenParam;
use AK\DoudianSDK\Requests\Token\CreateTokenRequest;
use AK\DoudianSDK\Requests\Token\RefreshTokenRequest;

class AccessTokenBuilder
{

    /**
     * @throws Exception
     */
    public static function build(DoudianOpConfig $config, $type = AccessToken::ACCESS_TOKEN_CODE): AccessToken
    {
        $param = new CreateTokenParam();
        if ($type == AccessToken::ACCESS_TOKEN_SHOP_ID) {
            $param->shop_id = $config->getShopId();
            $param->grant_type = "authorization_self";
            $param->code = "";
        } else if ($type == AccessToken::ACCESS_TOKEN_CODE) {
            $param->grant_type = "authorization_code";
            $param->code = $config->getCode();
        }

        $request = (new CreateTokenRequest())->setParam($param);
        if ($config->getAppKey() && $config->getAppSecret()) {
            $request = $request->setConfig($config);
        }

        $resp = $request->execute(null);
        return AccessToken::wrap($resp);
    }

    /**
     * @throws Exception
     */
    public static function refresh(DoudianOpConfig $config): AccessToken
    {
        $param = new RefreshTokenParam();
        $param->grant_type = "refresh_token";
        if (is_string($config->getToken())) {
            $param->refresh_token = $config;
        } else {
            $param->refresh_token = $config->getToken()->getRefreshToken();
        }

        $request = (new RefreshTokenRequest())->setParam($param);
        if ($config->getAppKey() && $config->getAppSecret()) {
            $request = $request->setConfig($config);
        }
        $resp = $request->execute(null);
        return AccessToken::wrap($resp);
    }

    public static function parse($accessTokenStr): AccessToken
    {
        $accessToken = new AccessToken();
        $accessToken->setAccessToken($accessTokenStr);

        return $accessToken;
    }
}