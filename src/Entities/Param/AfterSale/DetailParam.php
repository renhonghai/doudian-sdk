<?php

namespace AK\DoudianSDK\Entities\Param\AfterSale;

use AK\DoudianSDK\Entities\BaseEntity;


class DetailParam extends BaseEntity
{

    public $after_sale_id;

    public $is_searchable;

    /**
     * @return mixed
     */
    public function getAfterSaleId()
    {
        return $this->after_sale_id;
    }

    /**
     * @param mixed $after_sale_id
     */
    public function setAfterSaleId($after_sale_id): void
    {
        $this->after_sale_id = $after_sale_id;
    }

    /**
     * @return mixed
     */
    public function getIsSearchable()
    {
        return $this->is_searchable;
    }

    /**
     * @param mixed $is_searchable
     */
    public function setIsSearchable($is_searchable): void
    {
        $this->is_searchable = $is_searchable;
    }



}
