<?php

namespace Renhonghai\DoudianSDK\Entities\Param\AfterSale;

use Renhonghai\DoudianSDK\Entities\BaseEntity;


class TimeExtendParam extends BaseEntity
{

    public $aftersale_id;

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

}
