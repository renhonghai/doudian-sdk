<?php

namespace AK\DoudianSDK\Entities\Param\Order;

use AK\DoudianSDK\Entities\BaseEntity;


class DownloadSettleItemToShopParam extends BaseEntity
{

    public $start_time;

    public $end_time;

    public $time_type;

    public $order_id;

    public $bill_id;

    public $product_id;

    public $pay_type;

    public $flow_type;

    /**
     * @return mixed
     */
    public function getStartTime()
    {
        return $this->start_time;
    }

    /**
     * @param mixed $start_time
     */
    public function setStartTime($start_time): void
    {
        $this->start_time = $start_time;
    }

    /**
     * @return mixed
     */
    public function getEndTime()
    {
        return $this->end_time;
    }

    /**
     * @param mixed $end_time
     */
    public function setEndTime($end_time): void
    {
        $this->end_time = $end_time;
    }

    /**
     * @return mixed
     */
    public function getTimeType()
    {
        return $this->time_type;
    }

    /**
     * @param mixed $time_type
     */
    public function setTimeType($time_type): void
    {
        $this->time_type = $time_type;
    }

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
    public function getBillId()
    {
        return $this->bill_id;
    }

    /**
     * @param mixed $bill_id
     */
    public function setBillId($bill_id): void
    {
        $this->bill_id = $bill_id;
    }

    /**
     * @return mixed
     */
    public function getProductId()
    {
        return $this->product_id;
    }

    /**
     * @param mixed $product_id
     */
    public function setProductId($product_id): void
    {
        $this->product_id = $product_id;
    }

    /**
     * @return mixed
     */
    public function getPayType()
    {
        return $this->pay_type;
    }

    /**
     * @param mixed $pay_type
     */
    public function setPayType($pay_type): void
    {
        $this->pay_type = $pay_type;
    }

    /**
     * @return mixed
     */
    public function getFlowType()
    {
        return $this->flow_type;
    }

    /**
     * @param mixed $flow_type
     */
    public function setFlowType($flow_type): void
    {
        $this->flow_type = $flow_type;
    }

}
