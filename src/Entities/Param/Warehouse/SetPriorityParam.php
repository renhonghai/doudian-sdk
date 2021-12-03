<?php

namespace Renhonghai\DoudianSDK\Entities\Param\Warehouse;

use Renhonghai\DoudianSDK\Entities\BaseEntity;


class SetPriorityParam extends BaseEntity
{

    public $addr;

    public $priorities;

    /**
     * @return mixed
     */
    public function getAddr()
    {
        return $this->addr;
    }

    /**
     * @param mixed $addr
     */
    public function setAddr($addr): void
    {
        $this->addr = $addr;
    }

    /**
     * @return mixed
     */
    public function getPriorities()
    {
        return $this->priorities;
    }

    /**
     * @param mixed $priorities
     */
    public function setPriorities($priorities): void
    {
        $this->priorities = $priorities;
    }

}
