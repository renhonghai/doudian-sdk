<?php

namespace AK\DoudianSDK\Entities\Param\Logistics;

use AK\DoudianSDK\Entities\BaseEntity;


class TrackNoRouteDetailParam extends BaseEntity
{

    public $logistics_code;

    public $track_no;

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

}
