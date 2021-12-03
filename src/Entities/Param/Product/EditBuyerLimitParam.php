<?php

namespace Renhonghai\DoudianSDK\Entities\Param\Product;

use Renhonghai\DoudianSDK\Entities\BaseEntity;


class EditBuyerLimitParam extends BaseEntity
{

    public $product_id;

    public $maximum_per_order;

    public $limit_per_buyer;

    public $minimum_per_order;

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
    public function getMaximumPerOrder()
    {
        return $this->maximum_per_order;
    }

    /**
     * @param mixed $maximum_per_order
     */
    public function setMaximumPerOrder($maximum_per_order): void
    {
        $this->maximum_per_order = $maximum_per_order;
    }

    /**
     * @return mixed
     */
    public function getLimitPerBuyer()
    {
        return $this->limit_per_buyer;
    }

    /**
     * @param mixed $limit_per_buyer
     */
    public function setLimitPerBuyer($limit_per_buyer): void
    {
        $this->limit_per_buyer = $limit_per_buyer;
    }

    /**
     * @return mixed
     */
    public function getMinimumPerOrder()
    {
        return $this->minimum_per_order;
    }

    /**
     * @param mixed $minimum_per_order
     */
    public function setMinimumPerOrder($minimum_per_order): void
    {
        $this->minimum_per_order = $minimum_per_order;
    }

}
