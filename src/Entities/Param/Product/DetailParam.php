<?php

namespace Renhonghai\DoudianSDK\Entities\Param\Product;

use Renhonghai\DoudianSDK\Entities\BaseEntity;

class DetailParam extends BaseEntity
{

    public $product_id;

    public $out_product_id;

    public $show_draft;

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
    public function getShowDraft()
    {
        return $this->show_draft;
    }

    /**
     * @param mixed $show_draft
     */
    public function setShowDraft($show_draft): void
    {
        $this->show_draft = $show_draft;
    }

}