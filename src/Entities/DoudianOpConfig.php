<?php

namespace Renhonghai\DoudianSDK\Entities;

use Renhonghai\DoudianSDK\Configs\DoudianOpenPlatform;

class DoudianOpConfig extends BaseEntity
{

    public $appKey;
    public $appSecret;

    public $httpConnectTimeout = DoudianOpenPlatform::OPEN_PLATFORM_HTTP_CONNECT_TIMEOUT;
    public $httpReadTimeout = DoudianOpenPlatform::OPEN_PLATFORM_HTTP_READ_TIMEOUT;
    public $openRequestUrl = DoudianOpenPlatform::OPEN_PLATFORM_REQUEST_URL;

}