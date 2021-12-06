<?php

namespace AK\DoudianSDK\Utils;

class ObjectUtil
{
    /**
     * @param $source
     * @param string $target
     * @return mixed|null
     */
    public static function copy($source, string $target)
    {
        if (is_null($source) || !class_exists($target)) {
            return null;
        }

        if (!is_array($source)) {
            $source = $source->toArray();
        }

        $class = new $target();
        foreach ($source as $key => $value) {
            $method = StrUtil::camel("set_$key");

            if (method_exists($class, $method)) {
                call_user_func_array([$class, $method], [$value]);
            }
        }

        return $class;
    }

    /**
     * @param object $object
     * @param $items
     */
    public static function assign(object $object, $items)
    {
        if (!is_array($items)) {
            $items = $items->toArray();
        }

        foreach ($items as $key => $value) {
            $method = StrUtil::camel("set_$key");

            if (method_exists($object, $method)) {
                call_user_func_array([$object, $method], [$value]);
            }
        }
    }
}