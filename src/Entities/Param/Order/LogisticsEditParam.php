<?php

namespace Renhonghai\DoudianSDK\Entities\Param\Order;

use Renhonghai\DoudianSDK\Entities\BaseEntity;


class LogisticsEditParam extends BaseEntity
{

    public $order_id;

    public $logistics_id;

    public $company;

    public $company_code;

    public $logistics_code;

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

}
