<?php

namespace Renhonghai\DoudianSDK\Entities\Param\Material;

use Renhonghai\DoudianSDK\Entities\BaseEntity;


class EditMaterialParam extends BaseEntity
{

    public $material_id;

    public $material_name;

    public $to_folder_id;

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

    /**
     * @return mixed
     */
    public function getMaterialName()
    {
        return $this->material_name;
    }

    /**
     * @param mixed $material_name
     */
    public function setMaterialName($material_name): void
    {
        $this->material_name = $material_name;
    }

    /**
     * @return mixed
     */
    public function getToFolderId()
    {
        return $this->to_folder_id;
    }

    /**
     * @param mixed $to_folder_id
     */
    public function setToFolderId($to_folder_id): void
    {
        $this->to_folder_id = $to_folder_id;
    }

}
