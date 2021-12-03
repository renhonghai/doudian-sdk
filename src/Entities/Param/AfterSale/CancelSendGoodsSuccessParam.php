<?php

namespace Renhonghai\DoudianSDK\Entities\Param\AfterSale;

use Renhonghai\DoudianSDK\Entities\BaseEntity;


class CancelSendGoodsSuccessParam extends BaseEntity
{

    public $aftersale_id;

    public $op_time;

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

}
