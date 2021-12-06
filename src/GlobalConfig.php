<?php

namespace AK\DoudianSDK;

use AK\DoudianSDK\Entities\DoudianOpConfig;

class GlobalConfig extends DoudianOpConfig
{

    private static $instance;

    private function __construct()
    {
        parent::__construct();
    }

    public static function getGlobalConfig(): DoudianOpConfig
    {
        if (!(self::$instance instanceof self)) {
            self::$instance = new self();
        }

        return self::$instance;
    }

    private function __clone() {}
}