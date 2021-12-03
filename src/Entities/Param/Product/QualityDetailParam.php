<?php

namespace Renhonghai\DoudianSDK\Entities\Param\Product;

use Renhonghai\DoudianSDK\Entities\BaseEntity;


class QualityDetailParam extends BaseEntity
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
