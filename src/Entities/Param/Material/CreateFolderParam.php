<?php

namespace AK\DoudianSDK\Entities\Param\Material;

use AK\DoudianSDK\Entities\BaseEntity;


class CreateFolderParam extends BaseEntity
{

    public $name;

    public $parent_folder_id;

    public $type;

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
    public function getParentFolderId()
    {
        return $this->parent_folder_id;
    }

    /**
     * @param mixed $parent_folder_id
     */
    public function setParentFolderId($parent_folder_id): void
    {
        $this->parent_folder_id = $parent_folder_id;
    }

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param mixed $type
     */
    public function setType($type): void
    {
        $this->type = $type;
    }

}
