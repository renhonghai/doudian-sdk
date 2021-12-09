<?php

namespace AK\DoudianSDK\Entities;

use Exception;
use ReflectionClass;
use AK\DoudianSDK\Utils\{
    StrUtil,
    ObjectUtil
};

class BaseEntity
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
        $keys = $this->keys();

        $items = [];
        foreach ($keys as $key) {
            $value = call_user_func_array([
                $this,
                StrUtil::camel("get_{$key}")
            ], []);

            if (is_null($value)) {
                continue;
            }

            if (is_array($value)) {
                foreach ($value as $k => $val) {
                    if ($val instanceof BaseEntity) {
                        $val = $val->toArray();
                    }

                    $value[$k] = $val;
                }
            }

            $items[$key] = $value;
        }

        return $items;
    }

    public function keys(): array
    {
        try {
            $ref = new \ReflectionClass($this);
            $properties = $ref->getProperties();
            $parentClass = $ref->getParentClass();

            while(true) {
                if ($parentClass->getName() == self::class) {
                    break;
                }

                $properties += $parentClass->getProperties();
                $parentClass = $parentClass->getParentClass();
            }

            $keys = [];
            foreach ($properties as $property) {
                $keys[] = $property->getName();
            }

            return $keys;
        } catch (\ReflectionException $e) {
            return [];
        }
    }

    public function values(): array
    {
        return array_values($this->toArray());
    }

    public function resolving($items)
    {
        ObjectUtil::assign($this, $items);
    }

    public function combine($items): BaseEntity
    {
        $this->resolving(array_combine($this->keys(), $items));
        return $this;
    }

    public function toJson()
    {
        return json_encode($this->toArray(), JSON_UNESCAPED_UNICODE);
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