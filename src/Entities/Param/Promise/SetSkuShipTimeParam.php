<?php

namespace Renhonghai\DoudianSDK\Entities\Param\Promise;

use Renhonghai\DoudianSDK\Entities\BaseEntity;


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
