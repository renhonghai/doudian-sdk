<?php

namespace Renhonghai\DoudianSDK\Entities\Param\Material;

use Renhonghai\DoudianSDK\Entities\BaseEntity;


class SearchFolderParam extends BaseEntity
{

    public $order_by;

    public $page_num;

    public $page_size;

    public $name;

    public $folder_id;

    public $create_time_start;

    public $create_time_end;

    public $parent_folder_id;

    public $operate_status;

    /**
     * @return mixed
     */
    public function getOrderBy()
    {
        return $this->order_by;
    }

    /**
     * @param mixed $order_by
     */
    public function setOrderBy($order_by): void
    {
        $this->order_by = $order_by;
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
    public function getCreateTimeStart()
    {
        return $this->create_time_start;
    }

    /**
     * @param mixed $create_time_start
     */
    public function setCreateTimeStart($create_time_start): void
    {
        $this->create_time_start = $create_time_start;
    }

    /**
     * @return mixed
     */
    public function getCreateTimeEnd()
    {
        return $this->create_time_end;
    }

    /**
     * @param mixed $create_time_end
     */
    public function setCreateTimeEnd($create_time_end): void
    {
        $this->create_time_end = $create_time_end;
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
    public function getOperateStatus()
    {
        return $this->operate_status;
    }

    /**
     * @param mixed $operate_status
     */
    public function setOperateStatus($operate_status): void
    {
        $this->operate_status = $operate_status;
    }

}
