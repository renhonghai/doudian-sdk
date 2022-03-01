<?php

namespace AK\DoudianSDK\Entities\Param\AfterSale;

use AK\DoudianSDK\Entities\BaseEntity;


class ListParam extends BaseEntity
{

    public $order_id;

    public $aftersale_type;

    public $aftersale_status;

    public $reason;

    public $logistics_status;

    public $pay_type;

    public $refund_type;

    public $arbitrate_status;

    public $order_flag;

    public $start_time;

    public $end_time;

    public $amount_start;

    public $amount_end;

    public $risk_flag;

    public $order_by;

    public $page;

    public $size;

    public $aftersale_id;

    public $standard_aftersale_status;

    public $need_special_type;

    public $update_start_time;

    public $update_end_time;

    public $order_logistics_tracking_no;

    public $order_logistics_state;

    public $agree_refuse_sign;

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
    public function getAftersaleType()
    {
        return $this->aftersale_type;
    }

    /**
     * @param mixed $aftersale_type
     */
    public function setAftersaleType($aftersale_type): void
    {
        $this->aftersale_type = $aftersale_type;
    }

    /**
     * @return mixed
     */
    public function getAftersaleStatus()
    {
        return $this->aftersale_status;
    }

    /**
     * @param mixed $aftersale_status
     */
    public function setAftersaleStatus($aftersale_status): void
    {
        $this->aftersale_status = $aftersale_status;
    }

    /**
     * @return mixed
     */
    public function getReason()
    {
        return $this->reason;
    }

    /**
     * @param mixed $reason
     */
    public function setReason($reason): void
    {
        $this->reason = $reason;
    }

    /**
     * @return mixed
     */
    public function getLogisticsStatus()
    {
        return $this->logistics_status;
    }

    /**
     * @param mixed $logistics_status
     */
    public function setLogisticsStatus($logistics_status): void
    {
        $this->logistics_status = $logistics_status;
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
    public function getRefundType()
    {
        return $this->refund_type;
    }

    /**
     * @param mixed $refund_type
     */
    public function setRefundType($refund_type): void
    {
        $this->refund_type = $refund_type;
    }

    /**
     * @return mixed
     */
    public function getArbitrateStatus()
    {
        return $this->arbitrate_status;
    }

    /**
     * @param mixed $arbitrate_status
     */
    public function setArbitrateStatus($arbitrate_status): void
    {
        $this->arbitrate_status = $arbitrate_status;
    }

    /**
     * @return mixed
     */
    public function getOrderFlag()
    {
        return $this->order_flag;
    }

    /**
     * @param mixed $order_flag
     */
    public function setOrderFlag($order_flag): void
    {
        $this->order_flag = $order_flag;
    }

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
    public function getAmountStart()
    {
        return $this->amount_start;
    }

    /**
     * @param mixed $amount_start
     */
    public function setAmountStart($amount_start): void
    {
        $this->amount_start = $amount_start;
    }

    /**
     * @return mixed
     */
    public function getAmountEnd()
    {
        return $this->amount_end;
    }

    /**
     * @param mixed $amount_end
     */
    public function setAmountEnd($amount_end): void
    {
        $this->amount_end = $amount_end;
    }

    /**
     * @return mixed
     */
    public function getRiskFlag()
    {
        return $this->risk_flag;
    }

    /**
     * @param mixed $risk_flag
     */
    public function setRiskFlag($risk_flag): void
    {
        $this->risk_flag = $risk_flag;
    }

    /**
     * @return mixed
     */
    public function getOrderBy()
    {
        return $this->order_by;
    }

    /**
     * @param mixed $order_by
     */
    public function setOrderBy($order_by): void
    {
        $this->order_by = $order_by;
    }

    /**
     * @return mixed
     */
    public function getPage()
    {
        return $this->page;
    }

    /**
     * @param mixed $page
     */
    public function setPage($page): void
    {
        $this->page = $page;
    }

    /**
     * @return mixed
     */
    public function getSize()
    {
        return $this->size;
    }

    /**
     * @param mixed $size
     */
    public function setSize($size): void
    {
        $this->size = $size;
    }

    /**
     * @return mixed
     */
    public function getAftersaleId()
    {
        return $this->aftersale_id;
    }

    /**
     * @param mixed $aftersale_id
     */
    public function setAftersaleId($aftersale_id): void
    {
        $this->aftersale_id = $aftersale_id;
    }

    /**
     * @return mixed
     */
    public function getStandardAftersaleStatus()
    {
        return $this->standard_aftersale_status;
    }

    /**
     * @param mixed $standard_aftersale_status
     */
    public function setStandardAftersaleStatus($standard_aftersale_status): void
    {
        $this->standard_aftersale_status = $standard_aftersale_status;
    }

    /**
     * @return mixed
     */
    public function getNeedSpecialType()
    {
        return $this->need_special_type;
    }

    /**
     * @param mixed $need_special_type
     */
    public function setNeedSpecialType($need_special_type): void
    {
        $this->need_special_type = $need_special_type;
    }

    /**
     * @return mixed
     */
    public function getUpdateStartTime()
    {
        return $this->update_start_time;
    }

    /**
     * @param mixed $update_start_time
     */
    public function setUpdateStartTime($update_start_time): void
    {
        $this->update_start_time = $update_start_time;
    }

    /**
     * @return mixed
     */
    public function getUpdateEndTime()
    {
        return $this->update_end_time;
    }

    /**
     * @param mixed $update_end_time
     */
    public function setUpdateEndTime($update_end_time): void
    {
        $this->update_end_time = $update_end_time;
    }

    /**
     * @return mixed
     */
    public function getOrderLogisticsTrackingNo()
    {
        return $this->order_logistics_tracking_no;
    }

    /**
     * @param mixed $order_logistics_tracking_no
     */
    public function setOrderLogisticsTrackingNo($order_logistics_tracking_no): void
    {
        $this->order_logistics_tracking_no = $order_logistics_tracking_no;
    }

    /**
     * @return mixed
     */
    public function getOrderLogisticsState()
    {
        return $this->order_logistics_state;
    }

    /**
     * @param mixed $order_logistics_state
     */
    public function setOrderLogisticsState($order_logistics_state): void
    {
        $this->order_logistics_state = $order_logistics_state;
    }

    /**
     * @return mixed
     */
    public function getAgreeRefuseSign()
    {
        return $this->agree_refuse_sign;
    }

    /**
     * @param mixed $agree_refuse_sign
     */
    public function setAgreeRefuseSign($agree_refuse_sign): void
    {
        $this->agree_refuse_sign = $agree_refuse_sign;
    }

}
