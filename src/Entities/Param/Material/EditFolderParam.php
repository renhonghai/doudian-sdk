<?php

namespace Renhonghai\DoudianSDK\Entities\Param\Material;

use Renhonghai\DoudianSDK\Entities\BaseEntity;


class EditFolderParam extends BaseEntity
{

    public $folder_id;

    public $name;

    public $to_folder_id;

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
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name): void
    {
        $this->name = $name;
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
