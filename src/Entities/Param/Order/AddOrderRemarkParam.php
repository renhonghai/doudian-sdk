<?php

namespace AK\DoudianSDK\Entities\Param\Order;

use AK\DoudianSDK\Entities\BaseEntity;


class AddOrderRemarkParam extends BaseEntity
{

    public $order_id;

    public $remark;

    public $is_add_star;

    public $star;

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
    public function getRemark()
    {
        return $this->remark;
    }

    /**
     * @param mixed $remark
     */
    public function setRemark($remark): void
    {
        $this->remark = $remark;
    }

    /**
     * @return mixed
     */
    public function getIsAddStar()
    {
        return $this->is_add_star;
    }

    /**
     * @param mixed $is_add_star
     */
    public function setIsAddStar($is_add_star): void
    {
        $this->is_add_star = $is_add_star;
    }

    /**
     * @return mixed
     */
    public function getStar()
    {
        return $this->star;
    }

    /**
     * @param mixed $star
     */
    public function setStar($star): void
    {
        $this->star = $star;
    }

}
