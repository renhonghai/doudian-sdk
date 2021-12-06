<?php

namespace AK\DoudianSDK\Entities\Param\Shop;

use AK\DoudianSDK\Entities\BaseEntity;


class GetShopCategoryParam extends BaseEntity
{

    public $cid;

    /**
     * @return mixed
     */
    public function getCid()
    {
        return $this->cid;
    }

    /**
     * @param mixed $cid
     */
    public function setCid($cid): void
    {
        $this->cid = $cid;
    }

}
