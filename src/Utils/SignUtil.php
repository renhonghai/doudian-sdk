<?php

namespace AK\DoudianSDK\Utils;

use AK\DoudianSDK\Constants\SignMethodConstant;

class SignUtil
{

    /**
     * 签名
     */
    public static function sign($appKey, $appSecret, $method, $timestamp, $paramJson)
    {
        $paramPattern = 'app_key' . $appKey . 'method' . $method . 'param_json' . $paramJson . 'timestamp' . $timestamp . 'v2';
        $signPattern = $appSecret . $paramPattern . $appSecret;

        return hash_hmac("sha256", $signPattern, $appSecret);
    }

    /**
     * 消息通知签名
     * @param $appKey
     * @param $appSecret
     * @param $requestBody
     * @return string
     */
    public static function notifySign($appKey, $appSecret, $requestBody): string
    {
        $requestBody = preg_replace('/\s+/', '', $requestBody);
        return md5("{$appKey}{$requestBody}{$appSecret}");
    }

    public static function spiSign($appKey, $appSecret, $timestamp, $paramJson, $signMethodStr = 'md5') {
        $paramPattern = 'app_key' . $appKey . 'param_json' . $paramJson . 'timestamp' . $timestamp;
        $signPattern = $appSecret . $paramPattern . $appSecret;

        if (SignMethodConstant::SHA256_STR === $signMethodStr) {
            return hash_hmac("sha256", $signPattern, $appSecret);
        }

        return md5($signPattern);
    }

    /**
     * 关联数组排序，递归
     */
    private static function recKSort(&$arr)
    {
        $kString = true;
        foreach ($arr as $k => &$v) {
            if (!is_string($k)) {
                $kString = false;
            }
            if (is_array($v)) {
                SignUtil::recKSort($v);
            }
        }
        if ($kString) {
            ksort($arr);
        }
    }

    /**
     * 序列化参数，入参必须为关联数组
     */
    public static function marshal($param)
    {
        if ($param == null) {
            return "{}";
        }

        $arr = self::objToArray($param);
        SignUtil::recKSort($arr);
        return json_encode($arr, JSON_UNESCAPED_SLASHES | JSON_UNESCAPED_UNICODE);
    }

    /**
     * 对象转换数组
     */
    private static function objToArray($obj)
    {
        $jsonStr = json_encode($obj);
        return json_decode($jsonStr, true);
    }

}