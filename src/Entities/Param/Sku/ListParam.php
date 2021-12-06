<?php

namespace AK\DoudianSDK\Entities\Param\Sku;

use AK\DoudianSDK\Entities\BaseEntity;

class ListParam extends BaseEntity
{

    public $product_id;

    public $out_product_id;

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

    /**
     * @return mixed
     */
    public function getOutProductId()
    {
        return $this->out_product_id;
    }

    /**
     * @param mixed $out_product_id
     */
    public function setOutProductId($out_product_id): void
    {
        $this->out_product_id = $out_product_id;
    }

}