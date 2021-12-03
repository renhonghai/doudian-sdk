<?php

namespace Renhonghai\DoudianSDK\Entities\Param\Material;

use Renhonghai\DoudianSDK\Entities\BaseEntity;


class DeleteMaterialParam extends BaseEntity
{

    public $material_ids;

    /**
     * @return mixed
     */
    public function getMaterialIds()
    {
        return $this->material_ids;
    }

    /**
     * @param mixed $material_ids
     */
    public function setMaterialIds($material_ids): void
    {
        $this->material_ids = $material_ids;
    }

}
