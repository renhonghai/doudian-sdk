<?php

namespace AK\DoudianSDK\Core;

use AK\DoudianSDK\Constants\ResponseConstant;
use AK\DoudianSDK\Entities\DoudianOpSpiResponse;
use AK\DoudianSDK\Requests\DoudianOpSpiRequest;
use AK\DoudianSDK\Utils\SignUtil;
use Closure;
use Throwable;

class DoudianOpSpiClient
{
    private static $defaultInstance;

    private function __clone() {}

    public function request(DoudianOpSpiRequest $request, Closure $callback): DoudianOpSpiResponse
    {
        $spiParam = $request->getSpiParam();
        $config = $request->getConfig();

        /**
         * 将string类型的paramJson转成数组
         */
        $paramJsonArray = json_decode($spiParam->getParamJson());
        $sortedParamJson = SignUtil::marshal($paramJsonArray);

        $sign = SignUtil::spiSign(
            $config->getAppKey(),
            $config->getAppSecret(),
            $spiParam->getTimestamp(),
            $sortedParamJson,
            $spiParam->getSignMethod()
        );

        $spiResponse = new DoudianOpSpiResponse();
        if ($spiParam->getSign() != $sign) {
            $spiResponse->setCode(ResponseConstant::CODE_ERROR_SIGN);
            return $spiResponse;
        } else {
            $spiResponse->setCode(ResponseConstant::CODE_SUCCESS);
        }

        /**
         * 执行业务逻辑(通过$spiResponse->set返回内容)
         */
        try {
            call_user_func_array($callback, [ $request, $spiResponse ]);
        } catch (Throwable $e) {
            $spiResponse->setCode(ResponseConstant::CODE_ERROR_INNER);
            $spiResponse->setMessage($e->getMessage());
        }

        return $spiResponse;
    }

    public static function getInstance(): DoudianOpSpiClient
    {
        if (!(self::$defaultInstance instanceof self)) {
            self::$defaultInstance = new self();
        }

        return self::$defaultInstance;
    }
}