<?php

namespace AK\DoudianSDK\Entities\Param\Logistics;

use AK\DoudianSDK\Entities\BaseEntity;


class AppendSubOrderParam extends BaseEntity
{

    public $track_no;

    public $logistics_code;

    public $pack_add_quantity;

    /**
     * @return mixed
     */
    public function getTrackNo()
    {
        return $this->track_no;
    }

    /**
     * @param mixed $track_no
     */
    public function setTrackNo($track_no): void
    {
        $this->track_no = $track_no;
    }

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

    /**
     * @return mixed
     */
    public function getPackAddQuantity()
    {
        return $this->pack_add_quantity;
    }

    /**
     * @param mixed $pack_add_quantity
     */
    public function setPackAddQuantity($pack_add_quantity): void
    {
        $this->pack_add_quantity = $pack_add_quantity;
    }

}
