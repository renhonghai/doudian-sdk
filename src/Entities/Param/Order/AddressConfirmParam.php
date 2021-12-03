<?php

namespace Renhonghai\DoudianSDK\Entities\Param\Order;

use Renhonghai\DoudianSDK\Entities\BaseEntity;

class AddressConfirmParam extends BaseEntity
{

    public $order_id;

    public $is_approved;

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
    public function getIsApproved()
    {
        return $this->is_approved;
    }

    /**
     * @param mixed $is_approved
     */
    public function setIsApproved($is_approved): void
    {
        $this->is_approved = $is_approved;
    }

}
