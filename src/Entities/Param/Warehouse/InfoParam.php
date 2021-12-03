<?php

namespace Renhonghai\DoudianSDK\Entities\Param\Warehouse;

use Renhonghai\DoudianSDK\Entities\BaseEntity;


class InfoParam extends BaseEntity
{

    public $out_warehouse_id;

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

}
