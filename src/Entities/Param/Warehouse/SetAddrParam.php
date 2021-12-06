<?php

namespace AK\DoudianSDK\Entities\Param\Warehouse;

use AK\DoudianSDK\Entities\BaseEntity;


class SetAddrParam extends BaseEntity
{

    public $out_warehouse_id;

    public $addr;

    /**
     * @return mixed
     */
    public function getOutWarehouseId()
    {
        return $this->out_warehouse_id;
    }

    /**
     * @param mixed $out_warehouse_id
     */
    public function setOutWarehouseId($out_warehouse_id): void
    {
        $this->out_warehouse_id = $out_warehouse_id;
    }

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

}
