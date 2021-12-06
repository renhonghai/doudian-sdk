<?php

namespace AK\DoudianSDK\Entities\Param\Material;

use AK\DoudianSDK\Entities\BaseEntity;


class QueryMaterialDetailParam extends BaseEntity
{

    public $material_id;

    /**
     * @return mixed
     */
    public function getMaterialId()
    {
        return $this->material_id;
    }

    /**
     * @param mixed $material_id
     */
    public function setMaterialId($material_id): void
    {
        $this->material_id = $material_id;
    }


}
