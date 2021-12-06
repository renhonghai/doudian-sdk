<?php

namespace AK\DoudianSDK\Entities\Param\Order;

use AK\DoudianSDK\Entities\BaseEntity;


class LogisticsAddParam extends BaseEntity
{

    public $order_id;

    public $logistics_id;

    public $company;

    public $company_code;

    public $logistics_code;

    public $is_refund_reject;

    public $is_reject_refund;

    public $serial_number_list;

    public $address_id;

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

}
