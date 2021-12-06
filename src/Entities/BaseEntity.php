<?php

namespace AK\DoudianSDK\Entities;

use Exception;
use ReflectionClass;
use AK\DoudianSDK\Utils\{
    StrUtil,
    ObjectUtil
};

abstract class BaseEntity
{

    /**
     * BaseEntity constructor.
     */
    public function __construct(?array $items = [])
    {
        $items && $this->resolving($items);
    }

    public function toArray(): array
    {
        try {
            $ref        = new ReflectionClass($this);
            $properties = $ref->getProperties();

            $items = [];
            foreach ($properties as $property) {
                $value = call_user_func_array([
                    $this,
                    StrUtil::camel("get_{$property->getName()}")
                ], []);

                if (is_null($value)) {
                    continue;
                }

                $items[$property->getName()] = $value;
            }

            return $items;
        } catch (Exception $e) {
            return [];
        }
    }

    public function toJson()
    {
        return json_encode($this->toArray(), JSON_UNESCAPED_UNICODE);
    }

    public function resolving($items)
    {
        ObjectUtil::assign($this, $items);
    }

    public function __toString(): string
    {
        return $this->toJson();
    }

    public function __call($method, $arguments)
    {
        if (StrUtil::startsWith($method, 'get')) {
            $property = StrUtil::snake(StrUtil::after($method, 'get'));
            return property_exists($this, $property) ? $this->$property : null;
        } else if (StrUtil::startsWith($method, 'set')) {
            $property = StrUtil::snake(StrUtil::after($method, 'get'));
            property_exists($this, $property) && $this->$property = $arguments[0];
        }

        return null;
    }

}