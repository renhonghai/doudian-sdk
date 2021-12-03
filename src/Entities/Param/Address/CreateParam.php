<?php

namespace Renhonghai\DoudianSDK\Entities\Param\Address;

use Renhonghai\DoudianSDK\Entities\BaseEntity;

class CreateParam extends BaseEntity
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
