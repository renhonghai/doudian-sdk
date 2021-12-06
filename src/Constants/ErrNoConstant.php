<?php

namespace AK\DoudianSDK\Constants;

class ErrNoConstant
{

    const ERROR_NO_SUCCESS = 0;

    const ERROR_CODE_SUCCESS = 10000;
    const ERROR_CODE_SERVICE_ERROR = 20000;
    const ERROR_CODE_PERMISSION_ERROR = 30001;
    const ERROR_CODE_PARAMETER_MISSING_ERROR = 40001;
    const ERROR_CODE_PARAMETER_INVALID_ERROR = 40003;
    const ERROR_CODE_TOKEN_ERROR = 50001;
    const ERROR_CODE_TRAFFIC_LIMITED_ERROR = 60000;
    const ERROR_CODE_API_SERVICE_OFF_ERROR = 70000;
    const ERROR_CODE_UNKNOWN_ERROR_ERROR = 90000;

    const ERROR_CODE_MESSAGE = [
        self::ERROR_CODE_SUCCESS                 => '请求成功',
        self::ERROR_CODE_SERVICE_ERROR           => '服务不可用',
        self::ERROR_CODE_PERMISSION_ERROR        => '操作权限不足',
        self::ERROR_CODE_PARAMETER_MISSING_ERROR => '缺少必选参数',
        self::ERROR_CODE_PARAMETER_INVALID_ERROR => '非法的参数',
        self::ERROR_CODE_TOKEN_ERROR             => '平台处理失败',
        self::ERROR_CODE_TRAFFIC_LIMITED_ERROR   => '触发限流，请稍后重试',
        self::ERROR_CODE_API_SERVICE_OFF_ERROR   => '接口服务已下线',
        self::ERROR_CODE_UNKNOWN_ERROR_ERROR     => '其他异常',
    ];

    const ERROR_CODE_DETAIL_MESSAGE = [
        self::ERROR_CODE_SUCCESS                 => [],
        self::ERROR_CODE_SERVICE_ERROR           => [
            'dop.service-error' => '服务调用失败，请稍后重试'
        ],
        self::ERROR_CODE_PERMISSION_ERROR        => [
            'dop.no-permissions'               => '无权限',
            'isv.app-permissions-insufficient' => '应用无权限调用该接口，请先申请接口权限包',
            'dop.authorization-no-existed'     => '店铺授权已失效，请重新授权',
            'dop.app-forbidden'                => '应用已被系统禁用',
            'dop.authorization-closed'         => '店铺授权已被关闭，请联系商家打开授权开关',
        ],
        self::ERROR_CODE_PARAMETER_MISSING_ERROR => [
            'isv.parameter-missing'    => '缺少参数',
            'isv.signature-missing'    => '获取签名失败，请根据文档确保参数拼装正确',
            'isv.app-id-missing'       => '认证失败，app_key不存在',
            'isv.access-token-missing' => '认证失败，access_token不能为空',
        ],
        self::ERROR_CODE_PARAMETER_INVALID_ERROR => [
            'isv.parameter-invalid'          => '参数错误',
            'isv.parameter-format-invalid'   => '业务参数json解析失败，所有参数需为string类型',
            'isv.signature-invalid'          => '签名校验失败',
            'isv.access-token-expired'       => 'access_token已过期',
            'isv.access-token-no-existed'    => 'access_token不存在，请使用最新的access_token访问',
            'isv.access-token-invalid'       => 'app_key和access_token不匹配，请仔细检查',
            'isv.app-id-invalid'             => '认证失败，app_key格式不正确，应为19位纯数字',
            'isv.app-id-expired'             => 'app_key已过期失效，请前往抖店开放平台进行升级。升级指南：https://op.jinritemai.com/docs/guide-docs/6/31',
            'isv.authorization-type-invalid' => 'auth2协议验签失败，当前用户无法访问该接口。授权主体不匹配，请仔细检查',
            'isv.idempotent-id-existed'      => '幂等ID重复',
            'isv.timestamp-invalid'          => '时间戳不合法',
            'isv.timestamp-format-error'     => '时间戳格式错误',
        ],
        self::ERROR_CODE_TOKEN_ERROR             => [
            'dop.token-generate-failed:app-id-invalid'     => '生成token失败，app_key格式不正确，应为19位纯数字',
            'dop.token-generate-failed:app-secret-invalid' => '生成token失败，app_key不存在或者与app_secret不匹配',
            'dop.token-generate-failed:grant-type-invalid' => '生成token失败，grant_type参数取值不正确，请参照文档根据应用类型填写不同的值',
            'dop.token-generate-failed:app-forbidden'      => '生成token失败，开发者应用已经被禁用',
            'dop.token-generate-failed:code-invalid'       => '生成token失败，code参数不正确，请引导商家重新授权获取code',
            'dop.token-generate-failed:no-authorization'   => '生成token失败，店铺授权已失效，请重新引导商家完成店铺授权',
            'dop.token-generate-failed:code-expired'       => '生成token失败，code已经失效（code的有效期为10分钟）',
            'dop.token-generate-failed:token-expired'      => '生成token失败，token已过期',
            'dop.token-generate-failed:token-invalid'      => '生成token失败，token不存在',
        ],
        self::ERROR_CODE_TRAFFIC_LIMITED_ERROR   => [
            'isv.traffic-limited' => '请求太频繁，请稍后重试'
        ],
        self::ERROR_CODE_API_SERVICE_OFF_ERROR   => [
            'isp.comment-service-off' => '很抱歉，由于评价接口服务已到期，该接口已停止调用。详见：https://op.jinritemai.com/platform-notice/5/564',
            'isp.api-service-off'     => 'API不存在或API已下线'
        ],
        self::ERROR_CODE_UNKNOWN_ERROR_ERROR     => [
            'isv.env-suspected' => '您的环境存在安全风险，请稍后再试',
            'dop.unknown-error' => '未知错误'
        ],
    ];

    public static function getMessage($errNo): string
    {
        return self::ERROR_CODE_MESSAGE[$errNo] ?? '';
    }

    public static function getDetailMessage($errNo, $subCode): string
    {
        $errorMessages = self::ERROR_CODE_DETAIL_MESSAGE[$errNo] ?? [];
        return $errorMessages[$subCode] ?? '';
    }

}