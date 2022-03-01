<?php

namespace AK\DoudianSDK\Entities\Param\Material;

use AK\DoudianSDK\Entities\BaseEntity;


class UploadImageSyncParam extends BaseEntity
{

    public $folder_id;

    public $url;

    public $material_name;

    public $need_distinct;

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

    /**
     * @return mixed
     */
    public function getNeedDistinct()
    {
        return $this->need_distinct;
    }

    /**
     * @param mixed $need_distinct
     */
    public function setNeedDistinct($need_distinct): void
    {
        $this->need_distinct = $need_distinct;
    }

}
