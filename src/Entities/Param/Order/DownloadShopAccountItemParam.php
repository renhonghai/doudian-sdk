<?php

namespace Renhonghai\DoudianSDK\Entities\Param\Order;

use Renhonghai\DoudianSDK\Entities\BaseEntity;


class DownloadShopAccountItemParam extends BaseEntity
{

    public $start_time;

    public $end_time;

    public $order_id;

    public $account_type;

    public $biz_type;

    public $time_type;

    public $product_id;

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
    public function getAccountType()
    {
        return $this->account_type;
    }

    /**
     * @param mixed $account_type
     */
    public function setAccountType($account_type): void
    {
        $this->account_type = $account_type;
    }

    /**
     * @return mixed
     */
    public function getBizType()
    {
        return $this->biz_type;
    }

    /**
     * @param mixed $biz_type
     */
    public function setBizType($biz_type): void
    {
        $this->biz_type = $biz_type;
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

}
