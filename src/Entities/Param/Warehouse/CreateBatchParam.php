<?php

namespace AK\DoudianSDK\Entities\Param\Warehouse;

use AK\DoudianSDK\Entities\BaseEntity;


class CreateBatchParam extends BaseEntity
{

    public $out_warehouse_list;

    /**
     * @return mixed
     */
    public function getOutWarehouseList()
    {
        return $this->out_warehouse_list;
    }

    /**
     * @param mixed $out_warehouse_list
     */
    public function setOutWarehouseList($out_warehouse_list): void
    {
        $this->out_warehouse_list = $out_warehouse_list;
    }

}
