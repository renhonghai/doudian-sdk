<?php

namespace Renhonghai\DoudianSDK\Entities\Param\Logistics;

use Renhonghai\DoudianSDK\Entities\BaseEntity;


class WaybillApplyParam extends BaseEntity
{

    public $waybill_applies;

    /**
     * @return mixed
     */
    public function getWaybillApplies()
    {
        return $this->waybill_applies;
    }

    /**
     * @param mixed $waybill_applies
     */
    public function setWaybillApplies($waybill_applies): void
    {
        $this->waybill_applies = $waybill_applies;
    }

}
