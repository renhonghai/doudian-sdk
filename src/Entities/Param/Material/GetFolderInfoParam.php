<?php

namespace AK\DoudianSDK\Entities\Param\Material;

use AK\DoudianSDK\Entities\BaseEntity;


class GetFolderInfoParam extends BaseEntity
{

    public $folder_id;

    public $page_num;

    public $page_size;

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
    public function getPageNum()
    {
        return $this->page_num;
    }

    /**
     * @param mixed $page_num
     */
    public function setPageNum($page_num): void
    {
        $this->page_num = $page_num;
    }

    /**
     * @return mixed
     */
    public function getPageSize()
    {
        return $this->page_size;
    }

    /**
     * @param mixed $page_size
     */
    public function setPageSize($page_size): void
    {
        $this->page_size = $page_size;
    }

}
