<?php

namespace Renhonghai\DoudianSDK\Entities\Param\Order;

use Renhonghai\DoudianSDK\Entities\BaseEntity;


class UpdatePostAmountParam extends BaseEntity
{

    public $order_id;

    public $post_amount;

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
    public function getPostAmount()
    {
        return $this->post_amount;
    }

    /**
     * @param mixed $post_amount
     */
    public function setPostAmount($post_amount): void
    {
        $this->post_amount = $post_amount;
    }

}
