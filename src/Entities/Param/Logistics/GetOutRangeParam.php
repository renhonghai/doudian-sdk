<?php

namespace AK\DoudianSDK\Entities\Param\Logistics;

use AK\DoudianSDK\Entities\BaseEntity;


class GetOutRangeParam extends BaseEntity
{

    public $logistics_code;

    public $sender_address;

    public $receiver_address;

    public $type;

    public $service_list;

    public $product_type;

    public $delivery_req;

    /**
     * @return mixed
     */
    public function getLogisticsCode()
    {
        return $this->logistics_code;
    }

    /**
     * @param mixed $logistics_code
     */
    public function setLogisticsCode($logistics_code): void
    {
        $this->logistics_code = $logistics_code;
    }

    /**
     * @return mixed
     */
    public function getSenderAddress()
    {
        return $this->sender_address;
    }

    /**
     * @param mixed $sender_address
     */
    public function setSenderAddress($sender_address): void
    {
        $this->sender_address = $sender_address;
    }

    /**
     * @return mixed
     */
    public function getReceiverAddress()
    {
        return $this->receiver_address;
    }

    /**
     * @param mixed $receiver_address
     */
    public function setReceiverAddress($receiver_address): void
    {
        $this->receiver_address = $receiver_address;
    }

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param mixed $type
     */
    public function setType($type): void
    {
        $this->type = $type;
    }

    /**
     * @return mixed
     */
    public function getServiceList()
    {
        return $this->service_list;
    }

    /**
     * @param mixed $service_list
     */
    public function setServiceList($service_list): void
    {
        $this->service_list = $service_list;
    }

    /**
     * @return mixed
     */
    public function getProductType()
    {
        return $this->product_type;
    }

    /**
     * @param mixed $product_type
     */
    public function setProductType($product_type): void
    {
        $this->product_type = $product_type;
    }

    /**
     * @return mixed
     */
    public function getDeliveryReq()
    {
        return $this->delivery_req;
    }

    /**
     * @param mixed $delivery_req
     */
    public function setDeliveryReq($delivery_req): void
    {
        $this->delivery_req = $delivery_req;
    }

}
