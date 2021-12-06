<?php

namespace AK\DoudianSDK\Entities\Param\Sku;

use AK\DoudianSDK\Entities\BaseEntity;


class EditPriceParam extends BaseEntity
{

    public $price;

    public $code;

    public $sku_id;

    public $out_sku_id;

    public $product_id;

    public $out_product_id;

    /**
     * @return mixed
     */
    public function getPrice()
    {
        return $this->price;
    }

    /**
     * @param mixed $price
     */
    public function setPrice($price): void
    {
        $this->price = $price;
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
    public function getOutSkuId()
    {
        return $this->out_sku_id;
    }

    /**
     * @param mixed $out_sku_id
     */
    public function setOutSkuId($out_sku_id): void
    {
        $this->out_sku_id = $out_sku_id;
    }

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
