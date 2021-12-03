<?php

namespace Renhonghai\DoudianSDK\Entities\Param\Token;

use Renhonghai\DoudianSDK\Entities\BaseEntity;

class CreateTokenParam extends BaseEntity
{
    //业务参数
    public $code;

    public $grant_type;

    public $shop_id;

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

    /**
     * @return mixed
     */
    public function getGrantType()
    {
        return $this->grant_type;
    }

    /**
     * @param mixed $grant_type
     */
    public function setGrantType($grant_type): void
    {
        $this->grant_type = $grant_type;
    }

    /**
     * @return mixed
     */
    public function getShopId()
    {
        return $this->shop_id;
    }

    /**
     * @param mixed $shop_id
     */
    public function setShopId($shop_id): void
    {
        $this->shop_id = $shop_id;
    }

}