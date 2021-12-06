<?php

namespace AK\DoudianSDK\Entities\Param\Promise;

use AK\DoudianSDK\Entities\BaseEntity;


class SetSkuShipTimeParam extends BaseEntity
{

    public $rules;

    /**
     * @return mixed
     */
    public function getRules()
    {
        return $this->rules;
    }

    /**
     * @param mixed $rules
     */
    public function setRules($rules): void
    {
        $this->rules = $rules;
    }

}
