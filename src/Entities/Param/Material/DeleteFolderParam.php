<?php

namespace Renhonghai\DoudianSDK\Entities\Param\Material;

use Renhonghai\DoudianSDK\Entities\BaseEntity;


class DeleteFolderParam extends BaseEntity
{

    public $folder_ids;

    /**
     * @return mixed
     */
    public function getFolderIds()
    {
        return $this->folder_ids;
    }

    /**
     * @param mixed $folder_ids
     */
    public function setFolderIds($folder_ids): void
    {
        $this->folder_ids = $folder_ids;
    }

}
