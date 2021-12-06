<?php

namespace AK\DoudianSDK\Entities\Param\Sku;

use AK\DoudianSDK\Entities\BaseEntity;


class SyncStockBatchParam extends BaseEntity
{

    public $product_id;

    public $idempotent_id;

    public $incremental;

    public $sku_sync_list;

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
    public function getSkuSyncList()
    {
        return $this->sku_sync_list;
    }

    /**
     * @param mixed $sku_sync_list
     */
    public function setSkuSyncList($sku_sync_list): void
    {
        $this->sku_sync_list = $sku_sync_list;
    }

}
