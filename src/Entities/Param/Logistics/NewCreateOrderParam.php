<?php

namespace AK\DoudianSDK\Entities\Param\Logistics;

use AK\DoudianSDK\Entities\BaseEntity;


class NewCreateOrderParam extends BaseEntity
{

    public $sender_info;

    public $logistics_code;

    public $order_infos;

    public $user_id;

    public $delivery_req;

    public $order_channel;

    /**
     * @return mixed
     */
    public function getSenderInfo()
    {
        return $this->sender_info;
    }

    /**
     * @param mixed $sender_info
     */
    public function setSenderInfo($sender_info): void
    {
        $this->sender_info = $sender_info;
    }

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
    public function getOrderInfos()
    {
        return $this->order_infos;
    }

    /**
     * @param mixed $order_infos
     */
    public function setOrderInfos($order_infos): void
    {
        $this->order_infos = $order_infos;
    }

    /**
     * @return mixed
     */
    public function getUserId()
    {
        return $this->user_id;
    }

    /**
     * @param mixed $user_id
     */
    public function setUserId($user_id): void
    {
        $this->user_id = $user_id;
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

    /**
     * @return mixed
     */
    public function getOrderChannel()
    {
        return $this->order_channel;
    }

    /**
     * @param mixed $order_channel
     */
    public function setOrderChannel($order_channel): void
    {
        $this->order_channel = $order_channel;
    }

}
