<?php

namespace AK\DoudianSDK\Entities\Param\Order;

use AK\DoudianSDK\Entities\BaseEntity;


class ServiceDetailParam extends BaseEntity
{

    public $service_id;

    /**
     * @return mixed
     */
    public function getServiceId()
    {
        return $this->service_id;
    }

    /**
     * @param mixed $service_id
     */
    public function setServiceId($service_id): void
    {
        $this->service_id = $service_id;
    }

}
