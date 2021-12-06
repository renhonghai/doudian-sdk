<?php

namespace AK\DoudianSDK\Entities\Param\Product;

use AK\DoudianSDK\Entities\BaseEntity;


class GetCatePropertyV2Param extends BaseEntity
{

    public $category_leaf_id;

    /**
     * @return mixed
     */
    public function getCategoryLeafId()
    {
        return $this->category_leaf_id;
    }

    /**
     * @param mixed $category_leaf_id
     */
    public function setCategoryLeafId($category_leaf_id): void
    {
        $this->category_leaf_id = $category_leaf_id;
    }

}
