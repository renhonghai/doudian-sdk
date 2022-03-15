<?php

namespace AK\DoudianSDK\Entities\Param\TopUp;

use AK\DoudianSDK\Entities\BaseEntity;

class ResultParam extends BaseEntity
{

    public $trade_order_no;

    public $topup_biz;

    public $seller_order_no;

    public $seller_order_status;

    public $err_code;

    public $err_desc;

    /**
     * @return mixed
     */
    public function getTradeOrderNo()
    {
        return $this->trade_order_no;
    }

    /**
     * @param mixed $trade_order_no
     */
    public function setTradeOrderNo($trade_order_no): void
    {
        $this->trade_order_no = $trade_order_no;
    }

    /**
     * @return mixed
     */
    public function getTopupBiz()
    {
        return $this->topup_biz;
    }

    /**
     * @param mixed $topup_biz
     */
    public function setTopupBiz($topup_biz): void
    {
        $this->topup_biz = $topup_biz;
    }

    /**
     * @return mixed
     */
    public function getSellerOrderNo()
    {
        return $this->seller_order_no;
    }

    /**
     * @param mixed $seller_order_no
     */
    public function setSellerOrderNo($seller_order_no): void
    {
        $this->seller_order_no = $seller_order_no;
    }

    /**
     * @return mixed
     */
    public function getSellerOrderStatus()
    {
        return $this->seller_order_status;
    }

    /**
     * @param mixed $seller_order_status
     */
    public function setSellerOrderStatus($seller_order_status): void
    {
        $this->seller_order_status = $seller_order_status;
    }

    /**
     * @return mixed
     */
    public function getErrCode()
    {
        return $this->err_code;
    }

    /**
     * @param mixed $err_code
     */
    public function setErrCode($err_code): void
    {
        $this->err_code = $err_code;
    }

    /**
     * @return mixed
     */
    public function getErrDesc()
    {
        return $this->err_desc;
    }

    /**
     * @param mixed $err_desc
     */
    public function setErrDesc($err_desc): void
    {
        $this->err_desc = $err_desc;
    }

}