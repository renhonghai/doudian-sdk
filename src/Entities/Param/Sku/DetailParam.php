<?php

namespace AK\DoudianSDK\Entities\Param\Sku;

use AK\DoudianSDK\Entities\BaseEntity;


class DetailParam extends BaseEntity
{

    public $sku_id;

    public $code;

    /**
     * @return mixed
     */
    public function getSkuId()
    {
        return $this->sku_id;
    }

    /**
     * @param mixed $sku_id
     */
    public function setSkuId($sku_id): void
    {
        $this->sku_id = $sku_id;
    }

    /**
     * @return mixed
     */
    public function getCode()
    {
        return $this->code;
    }

    /**
     * @param mixed $code
     */
    public function setCode($code): void
    {
        $this->code = $code;
    }

}
