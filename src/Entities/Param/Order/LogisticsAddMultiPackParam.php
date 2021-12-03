<?php

namespace Renhonghai\DoudianSDK\Entities\Param\Order;

use Renhonghai\DoudianSDK\Entities\BaseEntity;


class LogisticsAddMultiPackParam extends BaseEntity
{

    public $order_id;

    public $pack_list;

    public $is_reject_refund;

    public $request_id;

    public $address_id;

    public $serial_number_list;

    public $is_refund_reject;

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
    public function getPackList()
    {
        return $this->pack_list;
    }

    /**
     * @param mixed $pack_list
     */
    public function setPackList($pack_list): void
    {
        $this->pack_list = $pack_list;
    }

    /**
     * @return mixed
     */
    public function getIsRejectRefund()
    {
        return $this->is_reject_refund;
    }

    /**
     * @param mixed $is_reject_refund
     */
    public function setIsRejectRefund($is_reject_refund): void
    {
        $this->is_reject_refund = $is_reject_refund;
    }

    /**
     * @return mixed
     */
    public function getRequestId()
    {
        return $this->request_id;
    }

    /**
     * @param mixed $request_id
     */
    public function setRequestId($request_id): void
    {
        $this->request_id = $request_id;
    }

    /**
     * @return mixed
     */
    public function getAddressId()
    {
        return $this->address_id;
    }

    /**
     * @param mixed $address_id
     */
    public function setAddressId($address_id): void
    {
        $this->address_id = $address_id;
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

    /**
     * @return mixed
     */
    public function getIsRefundReject()
    {
        return $this->is_refund_reject;
    }

    /**
     * @param mixed $is_refund_reject
     */
    public function setIsRefundReject($is_refund_reject): void
    {
        $this->is_refund_reject = $is_refund_reject;
    }

}
