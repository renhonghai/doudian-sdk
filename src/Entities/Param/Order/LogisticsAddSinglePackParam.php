<?php

namespace Renhonghai\DoudianSDK\Entities\Param\Order;

use Renhonghai\DoudianSDK\Entities\BaseEntity;


class LogisticsAddSinglePackParam extends BaseEntity
{

    public $order_id_list;

    public $shipped_order_info;

    public $logistics_code;

    public $company;

    public $request_id;

    public $is_reject_refund;

    public $logistics_id;

    public $company_code;

    public $address_id;

    public $is_refund_reject;

    public $order_serial_number;

    /**
     * @return mixed
     */
    public function getOrderIdList()
    {
        return $this->order_id_list;
    }

    /**
     * @param mixed $order_id_list
     */
    public function setOrderIdList($order_id_list): void
    {
        $this->order_id_list = $order_id_list;
    }

    /**
     * @return mixed
     */
    public function getShippedOrderInfo()
    {
        return $this->shipped_order_info;
    }

    /**
     * @param mixed $shipped_order_info
     */
    public function setShippedOrderInfo($shipped_order_info): void
    {
        $this->shipped_order_info = $shipped_order_info;
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
    public function getCompany()
    {
        return $this->company;
    }

    /**
     * @param mixed $company
     */
    public function setCompany($company): void
    {
        $this->company = $company;
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
    public function getLogisticsId()
    {
        return $this->logistics_id;
    }

    /**
     * @param mixed $logistics_id
     */
    public function setLogisticsId($logistics_id): void
    {
        $this->logistics_id = $logistics_id;
    }

    /**
     * @return mixed
     */
    public function getCompanyCode()
    {
        return $this->company_code;
    }

    /**
     * @param mixed $company_code
     */
    public function setCompanyCode($company_code): void
    {
        $this->company_code = $company_code;
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

    /**
     * @return mixed
     */
    public function getOrderSerialNumber()
    {
        return $this->order_serial_number;
    }

    /**
     * @param mixed $order_serial_number
     */
    public function setOrderSerialNumber($order_serial_number): void
    {
        $this->order_serial_number = $order_serial_number;
    }

}
