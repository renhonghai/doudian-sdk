<?php

namespace Renhonghai\DoudianSDK\Entities\Param\AfterSale;

use Renhonghai\DoudianSDK\Entities\BaseEntity;

class ApplyLogisticsInterceptParam extends BaseEntity
{

    public $after_sale_id;

    public $op_from;

    public $intercept_targets;

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
    public function getOpFrom()
    {
        return $this->op_from;
    }

    /**
     * @param mixed $op_from
     */
    public function setOpFrom($op_from): void
    {
        $this->op_from = $op_from;
    }

    /**
     * @return mixed
     */
    public function getInterceptTargets()
    {
        return $this->intercept_targets;
    }

    /**
     * @param mixed $intercept_targets
     */
    public function setInterceptTargets($intercept_targets): void
    {
        $this->intercept_targets = $intercept_targets;
    }

}
