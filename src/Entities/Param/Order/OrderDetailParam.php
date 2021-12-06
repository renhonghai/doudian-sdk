<?php

namespace AK\DoudianSDK\Entities\Param\Order;

use AK\DoudianSDK\Entities\BaseEntity;


class OrderDetailParam extends BaseEntity
{

    public $shop_order_id;

    public $is_searchable;

    /**
     * @return mixed
     */
    public function getShopOrderId()
    {
        return $this->shop_order_id;
    }

    /**
     * @param mixed $shop_order_id
     */
    public function setShopOrderId($shop_order_id): void
    {
        $this->shop_order_id = $shop_order_id;
    }

    /**
     * @return mixed
     */
    public function getIsSearchable()
    {
        return $this->is_searchable;
    }

    /**
     * @param mixed $is_searchable
     */
    public function setIsSearchable($is_searchable): void
    {
        $this->is_searchable = $is_searchable;
    }

}
