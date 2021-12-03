<?php

namespace Renhonghai\DoudianSDK\Entities\Param\Material;

use Renhonghai\DoudianSDK\Entities\BaseEntity;


class UploadImageSyncParam extends BaseEntity
{

    public $folder_id;

    public $url;

    public $material_name;

    /**
     * @return mixed
     */
    public function getFolderId()
    {
        return $this->folder_id;
    }

    /**
     * @param mixed $folder_id
     */
    public function setFolderId($folder_id): void
    {
        $this->folder_id = $folder_id;
    }

    /**
     * @return mixed
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * @param mixed $url
     */
    public function setUrl($url): void
    {
        $this->url = $url;
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

}
