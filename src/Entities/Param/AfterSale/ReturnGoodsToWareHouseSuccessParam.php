<?php

namespace Renhonghai\DoudianSDK\Entities\Param\AfterSale;

use Renhonghai\DoudianSDK\Entities\BaseEntity;


class ReturnGoodsToWareHouseSuccessParam extends BaseEntity
{

    public $aftersale_id;

    public $op_time;

    public $tracking_no;

    public $logistics_company_code;

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
    public function getOpTime()
    {
        return $this->op_time;
    }

    /**
     * @param mixed $op_time
     */
    public function setOpTime($op_time): void
    {
        $this->op_time = $op_time;
    }

    /**
     * @return mixed
     */
    public function getTrackingNo()
    {
        return $this->tracking_no;
    }

    /**
     * @param mixed $tracking_no
     */
    public function setTrackingNo($tracking_no): void
    {
        $this->tracking_no = $tracking_no;
    }

    /**
     * @return mixed
     */
    public function getLogisticsCompanyCode()
    {
        return $this->logistics_company_code;
    }

    /**
     * @param mixed $logistics_company_code
     */
    public function setLogisticsCompanyCode($logistics_company_code): void
    {
        $this->logistics_company_code = $logistics_company_code;
    }

}
