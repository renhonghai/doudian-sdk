<?php

namespace AK\DoudianSDK\Entities\Param\Logistics;

use AK\DoudianSDK\Entities\BaseEntity;


class ListShopNetsiteParam extends BaseEntity
{

    public $logistics_code;

    /**
     * @return mixed
     */
    public function getLogisticsCode()
    {
        return $this->logistics_code;
    }

    /**
     * @param mixed $logistics_code
     */
    public function setLogisticsCode($logistics_code): void
    {
        $this->logistics_code = $logistics_code;
    }

}
