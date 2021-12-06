<?php

namespace AK\DoudianSDK\Entities\Param\Address;

use AK\DoudianSDK\Entities\BaseEntity;

class UpdateParam extends BaseEntity
{

    public $address;

    /**
     * @return mixed
     */
    public function getAddress()
    {
        return $this->address;
    }

    /**
     * @param mixed $address
     */
    public function setAddress($address): void
    {
        $this->address = $address;
    }

}
