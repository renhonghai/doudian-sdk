<?php

namespace AK\DoudianSDK\Entities\Param\Product;

use AK\DoudianSDK\Entities\BaseEntity;


class SetOnlineParam extends BaseEntity
{

    public $product_id;

    /**
     * @return mixed
     */
    public function getProductId()
    {
        return $this->product_id;
    }

    /**
     * @param mixed $product_id
     */
    public function setProductId($product_id): void
    {
        $this->product_id = $product_id;
    }

}
