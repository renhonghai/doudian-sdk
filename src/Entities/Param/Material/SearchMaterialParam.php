<?php

namespace AK\DoudianSDK\Entities\Param\Material;

use AK\DoudianSDK\Entities\BaseEntity;


class SearchMaterialParam extends BaseEntity
{

    public $material_id;

    public $material_name;

    public $material_type;

    public $audit_status;

    public $create_time_start;

    public $create_time_end;

    public $folder_id;

    public $page_num;

    public $page_size;

    public $order_type;

    public $operate_status;

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
    public function getMaterialType()
    {
        return $this->material_type;
    }

    /**
     * @param mixed $material_type
     */
    public function setMaterialType($material_type): void
    {
        $this->material_type = $material_type;
    }

    /**
     * @return mixed
     */
    public function getAuditStatus()
    {
        return $this->audit_status;
    }

    /**
     * @param mixed $audit_status
     */
    public function setAuditStatus($audit_status): void
    {
        $this->audit_status = $audit_status;
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

    /**
     * @return mixed
     */
    public function getOrderType()
    {
        return $this->order_type;
    }

    /**
     * @param mixed $order_type
     */
    public function setOrderType($order_type): void
    {
        $this->order_type = $order_type;
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
