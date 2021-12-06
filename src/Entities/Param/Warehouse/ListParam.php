<?php

namespace AK\DoudianSDK\Entities\Param\Warehouse;

use AK\DoudianSDK\Entities\BaseEntity;


class ListParam extends BaseEntity
{

    public $out_warehouse_id;

    public $warehouse_name;

    public $addr;

    public $out_warehouse_ids;

    public $order_by;

    public $rank;

    public $page;

    public $size;

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
    public function getWarehouseName()
    {
        return $this->warehouse_name;
    }

    /**
     * @param mixed $warehouse_name
     */
    public function setWarehouseName($warehouse_name): void
    {
        $this->warehouse_name = $warehouse_name;
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

    /**
     * @return mixed
     */
    public function getOutWarehouseIds()
    {
        return $this->out_warehouse_ids;
    }

    /**
     * @param mixed $out_warehouse_ids
     */
    public function setOutWarehouseIds($out_warehouse_ids): void
    {
        $this->out_warehouse_ids = $out_warehouse_ids;
    }

    /**
     * @return mixed
     */
    public function getOrderBy()
    {
        return $this->order_by;
    }

    /**
     * @param mixed $order_by
     */
    public function setOrderBy($order_by): void
    {
        $this->order_by = $order_by;
    }

    /**
     * @return mixed
     */
    public function getRank()
    {
        return $this->rank;
    }

    /**
     * @param mixed $rank
     */
    public function setRank($rank): void
    {
        $this->rank = $rank;
    }

    /**
     * @return mixed
     */
    public function getPage()
    {
        return $this->page;
    }

    /**
     * @param mixed $page
     */
    public function setPage($page): void
    {
        $this->page = $page;
    }

    /**
     * @return mixed
     */
    public function getSize()
    {
        return $this->size;
    }

    /**
     * @param mixed $size
     */
    public function setSize($size): void
    {
        $this->size = $size;
    }

}
