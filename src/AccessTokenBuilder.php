<?php

namespace AK\DoudianSDK;

use Exception;
use AK\DoudianSDK\Entities\AccessToken;
use AK\DoudianSDK\Entities\Param\Token\CreateTokenData;
use AK\DoudianSDK\Entities\Param\Token\CreateTokenParam;
use AK\DoudianSDK\Entities\Param\Token\RefreshTokenParam;
use AK\DoudianSDK\Requests\Token\CreateTokenRequest;
use AK\DoudianSDK\Requests\Token\RefreshTokenRequest;

class AccessTokenBuilder
{

    /**
     * @throws Exception
     */
    public static function build($codeOrShopId, $type = AccessToken::ACCESS_TOKEN_CODE): AccessToken
    {
        $param = new CreateTokenParam();
        if ($type == AccessToken::ACCESS_TOKEN_SHOP_ID) {
            $param->shop_id = $codeOrShopId;
            $param->grant_type = "authorization_self";
            $param->code = "";
        } else if ($type == AccessToken::ACCESS_TOKEN_CODE) {
            $param->grant_type = "authorization_code";
            $param->code = $codeOrShopId;
        }

        $resp = (new CreateTokenRequest())->setParam($param)->execute(null);
        return AccessToken::wrap($resp);
    }

    /**
     * @throws Exception
     */
    public static function refresh($token): AccessToken
    {
        $param = new RefreshTokenParam();
        $param->grant_type = "refresh_token";
        if (is_string($token)) {
            $param->refresh_token = $token;
        } else {
            $param->refresh_token = $token->getRefreshToken();
        }

        $resp = (new RefreshTokenRequest())->setParam($param)->execute(null);
        return AccessToken::wrap($resp);
    }

    public static function parse($accessTokenStr): AccessToken
    {
        $accessToken = new AccessToken();
        $accessToken->setAccessToken($accessTokenStr);

        return $accessToken;
    }
}