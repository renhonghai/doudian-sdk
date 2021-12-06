<?php

namespace AK\DoudianSDK\Entities\Param\Warehouse;

use AK\DoudianSDK\Entities\BaseEntity;


class SetAddrBatchParam extends BaseEntity
{

    public $out_warehouse_id;

    public $addr_list;

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
    public function getAddrList()
    {
        return $this->addr_list;
    }

    /**
     * @param mixed $addr_list
     */
    public function setAddrList($addr_list): void
    {
        $this->addr_list = $addr_list;
    }

}
