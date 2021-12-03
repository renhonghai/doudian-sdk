<?php

namespace Renhonghai\DoudianSDK\Entities\Param\Order;

use Renhonghai\DoudianSDK\Entities\BaseEntity;


class AddSerialNumberParam extends BaseEntity
{

    public $order_id;

    public $serial_number_list;

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
    public function getSerialNumberList()
    {
        return $this->serial_number_list;
    }

    /**
     * @param mixed $serial_number_list
     */
    public function setSerialNumberList($serial_number_list): void
    {
        $this->serial_number_list = $serial_number_list;
    }

}
