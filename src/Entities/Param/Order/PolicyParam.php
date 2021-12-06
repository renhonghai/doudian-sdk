<?php

namespace AK\DoudianSDK\Entities\Param\Order;

use AK\DoudianSDK\Entities\BaseEntity;


class PolicyParam extends BaseEntity
{

    public $order_id;

    public $ins_product_id;

    /**
     * @return mixed
     */
    public function getOrderId()
    {
        return $this->order_id;
    }

    /**
     * @param mixed $order_id
     */
    public function setOrderId($order_id): void
    {
        $this->order_id = $order_id;
    }

    /**
     * @return mixed
     */
    public function getInsProductId()
    {
        return $this->ins_product_id;
    }

    /**
     * @param mixed $ins_product_id
     */
    public function setInsProductId($ins_product_id): void
    {
        $this->ins_product_id = $ins_product_id;
    }

}
