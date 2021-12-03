<?php

namespace Renhonghai\DoudianSDK\Entities\Param\Sku;

use Renhonghai\DoudianSDK\Entities\BaseEntity;


class SyncStockParam extends BaseEntity
{

    public $code;

    public $sku_id;

    public $out_sku_id;

    public $product_id;

    public $out_product_id;

    public $out_warehouse_id;

    public $supplier_id;

    public $incremental;

    public $idempotent_id;

    public $stock_num;

    public $step_stock_num;

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

    /**
     * @return mixed
     */
    public function getOutWarehouseId()
    {
        return $this->out_warehouse_id;
    }

    /**
     * @param mixed $out_warehouse_id
     */
    public function setOutWarehouseId($out_warehouse_id): void
    {
        $this->out_warehouse_id = $out_warehouse_id;
    }

    /**
     * @return mixed
     */
    public function getSupplierId()
    {
        return $this->supplier_id;
    }

    /**
     * @param mixed $supplier_id
     */
    public function setSupplierId($supplier_id): void
    {
        $this->supplier_id = $supplier_id;
    }

    /**
     * @return mixed
     */
    public function getIncremental()
    {
        return $this->incremental;
    }

    /**
     * @param mixed $incremental
     */
    public function setIncremental($incremental): void
    {
        $this->incremental = $incremental;
    }

    /**
     * @return mixed
     */
    public function getIdempotentId()
    {
        return $this->idempotent_id;
    }

    /**
     * @param mixed $idempotent_id
     */
    public function setIdempotentId($idempotent_id): void
    {
        $this->idempotent_id = $idempotent_id;
    }

    /**
     * @return mixed
     */
    public function getStockNum()
    {
        return $this->stock_num;
    }

    /**
     * @param mixed $stock_num
     */
    public function setStockNum($stock_num): void
    {
        $this->stock_num = $stock_num;
    }

    /**
     * @return mixed
     */
    public function getStepStockNum()
    {
        return $this->step_stock_num;
    }

    /**
     * @param mixed $step_stock_num
     */
    public function setStepStockNum($step_stock_num): void
    {
        $this->step_stock_num = $step_stock_num;
    }

}
