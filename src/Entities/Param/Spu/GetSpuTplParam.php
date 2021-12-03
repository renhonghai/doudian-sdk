<?php

namespace Renhonghai\DoudianSDK\Entities\Param\Spu;

use Renhonghai\DoudianSDK\Entities\BaseEntity;


class GetSpuTplParam extends BaseEntity
{

    public $category_id;

    /**
     * @return mixed
     */
    public function getCategoryId()
    {
        return $this->category_id;
    }

    /**
     * @param mixed $category_id
     */
    public function setCategoryId($category_id): void
    {
        $this->category_id = $category_id;
    }

}
