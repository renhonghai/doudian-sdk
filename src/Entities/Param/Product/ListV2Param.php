<?php

namespace AK\DoudianSDK\Entities\Param\Product;

use AK\DoudianSDK\Entities\BaseEntity;


class ListV2Param extends BaseEntity
{

    public $status;

    public $check_status;

    public $product_type;

    public $start_time;

    public $end_time;

    public $page;

    public $size;

    public $update_start_time;

    public $update_end_time;

    /**
     * @return mixed
     */
    public function getStatus()
    {
        return $this->status;
    }

    /**
     * @param mixed $status
     */
    public function setStatus($status): void
    {
        $this->status = $status;
    }

    /**
     * @return mixed
     */
    public function getCheckStatus()
    {
        return $this->check_status;
    }

    /**
     * @param mixed $check_status
     */
    public function setCheckStatus($check_status): void
    {
        $this->check_status = $check_status;
    }

    /**
     * @return mixed
     */
    public function getProductType()
    {
        return $this->product_type;
    }

    /**
     * @param mixed $product_type
     */
    public function setProductType($product_type): void
    {
        $this->product_type = $product_type;
    }

    /**
     * @return mixed
     */
    public function getStartTime()
    {
        return $this->start_time;
    }

    /**
     * @param mixed $start_time
     */
    public function setStartTime($start_time): void
    {
        $this->start_time = $start_time;
    }

    /**
     * @return mixed
     */
    public function getEndTime()
    {
        return $this->end_time;
    }

    /**
     * @param mixed $end_time
     */
    public function setEndTime($end_time): void
    {
        $this->end_time = $end_time;
    }

    /**
     * @return mixed
     */
    public function getPage()
    {
        return $this->page;
    }

    /**
     * @param mixed $page
     */
    public function setPage($page): void
    {
        $this->page = $page;
    }

    /**
     * @return mixed
     */
    public function getSize()
    {
        return $this->size;
    }

    /**
     * @param mixed $size
     */
    public function setSize($size): void
    {
        $this->size = $size;
    }

    /**
     * @return mixed
     */
    public function getUpdateStartTime()
    {
        return $this->update_start_time;
    }

    /**
     * @param mixed $update_start_time
     */
    public function setUpdateStartTime($update_start_time): void
    {
        $this->update_start_time = $update_start_time;
    }

    /**
     * @return mixed
     */
    public function getUpdateEndTime()
    {
        return $this->update_end_time;
    }

    /**
     * @param mixed $update_end_time
     */
    public function setUpdateEndTime($update_end_time): void
    {
        $this->update_end_time = $update_end_time;
    }

}
