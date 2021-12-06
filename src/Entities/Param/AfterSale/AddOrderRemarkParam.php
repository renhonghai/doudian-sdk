<?php

namespace AK\DoudianSDK\Entities\Param\AfterSale;

use AK\DoudianSDK\Entities\BaseEntity;


class AddOrderRemarkParam extends BaseEntity
{

    public $order_id;

    public $after_sale_id;

    public $remark;

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
    public function getAfterSaleId()
    {
        return $this->after_sale_id;
    }

    /**
     * @param mixed $after_sale_id
     */
    public function setAfterSaleId($after_sale_id): void
    {
        $this->after_sale_id = $after_sale_id;
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

}
