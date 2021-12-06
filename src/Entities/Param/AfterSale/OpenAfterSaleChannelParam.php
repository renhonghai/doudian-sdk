<?php

namespace AK\DoudianSDK\Entities\Param\AfterSale;

use AK\DoudianSDK\Entities\BaseEntity;


class OpenAfterSaleChannelParam extends BaseEntity
{

    public $order_id;

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

}
