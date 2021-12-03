<?php

namespace Renhonghai\DoudianSDK\Entities\Param\Address;

use Renhonghai\DoudianSDK\Entities\BaseEntity;

class AreaListParam extends BaseEntity
{

    public $city_id;

    /**
     * @return mixed
     */
    public function getCityId()
    {
        return $this->city_id;
    }

    /**
     * @param mixed $city_id
     */
    public function setCityId($city_id): void
    {
        $this->city_id = $city_id;
    }

}
