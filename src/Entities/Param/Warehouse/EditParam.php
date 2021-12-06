<?php

namespace AK\DoudianSDK\Entities\Param\Warehouse;

use AK\DoudianSDK\Entities\BaseEntity;


class EditParam extends BaseEntity
{

    public $out_warehouse_id;

    public $name;

    public $intro;

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
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name): void
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getIntro()
    {
        return $this->intro;
    }

    /**
     * @param mixed $intro
     */
    public function setIntro($intro): void
    {
        $this->intro = $intro;
    }

}
