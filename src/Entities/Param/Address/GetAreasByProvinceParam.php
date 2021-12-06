<?php

namespace AK\DoudianSDK\Entities\Param\Address;

use AK\DoudianSDK\Entities\BaseEntity;

class GetAreasByProvinceParam extends BaseEntity
{

    public $province_id;

    /**
     * @return mixed
     */
    public function getProvinceId()
    {
        return $this->province_id;
    }

    /**
     * @param mixed $province_id
     */
    public function setProvinceId($province_id): void
    {
        $this->province_id = $province_id;
    }

}
