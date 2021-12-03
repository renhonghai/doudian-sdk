<?php

namespace Renhonghai\DoudianSDK\Entities\Param\Address;

use Renhonghai\DoudianSDK\Entities\BaseEntity;

class ListParam extends BaseEntity
{

    public $shop_id;

    public $page_size;

    public $page_no;

    public $order_by;

    public $order_field;

    /**
     * @return mixed
     */
    public function getShopId()
    {
        return $this->shop_id;
    }

    /**
     * @param mixed $shop_id
     */
    public function setShopId($shop_id): void
    {
        $this->shop_id = $shop_id;
    }

    /**
     * @return mixed
     */
    public function getPageSize()
    {
        return $this->page_size;
    }

    /**
     * @param mixed $page_size
     */
    public function setPageSize($page_size): void
    {
        $this->page_size = $page_size;
    }

    /**
     * @return mixed
     */
    public function getPageNo()
    {
        return $this->page_no;
    }

    /**
     * @param mixed $page_no
     */
    public function setPageNo($page_no): void
    {
        $this->page_no = $page_no;
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
    public function getOrderField()
    {
        return $this->order_field;
    }

    /**
     * @param mixed $order_field
     */
    public function setOrderField($order_field): void
    {
        $this->order_field = $order_field;
    }

}
