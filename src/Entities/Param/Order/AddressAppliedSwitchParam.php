<?php

namespace Renhonghai\DoudianSDK\Entities\Param\Order;

use Renhonghai\DoudianSDK\Entities\BaseEntity;

class AddressAppliedSwitchParam extends BaseEntity
{

    public $is_allowed;

    /**
     * @return mixed
     */
    public function getIsAllowed()
    {
        return $this->is_allowed;
    }

    /**
     * @param mixed $is_allowed
     */
    public function setIsAllowed($is_allowed): void
    {
        $this->is_allowed = $is_allowed;
    }

}
