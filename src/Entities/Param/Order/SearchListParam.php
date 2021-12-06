<?php

namespace AK\DoudianSDK\Entities\Param\Order;

use AK\DoudianSDK\Entities\BaseEntity;


class SearchListParam extends BaseEntity
{

    public $product;

    public $b_type;

    public $after_sale_status_desc;

    public $tracking_no;

    public $presell_type;

    public $order_type;

    public $create_time_start;

    public $create_time_end;

    public $abnormal_order;

    public $trade_type;

    public $combine_status;

    public $update_time_start;

    public $update_time_end;

    public $size;

    public $page;

    public $order_by;

    public $order_asc;

    public $is_searchable;

    /**
     * @return mixed
     */
    public function getProduct()
    {
        return $this->product;
    }

    /**
     * @param mixed $product
     */
    public function setProduct($product): void
    {
        $this->product = $product;
    }

    /**
     * @return mixed
     */
    public function getBType()
    {
        return $this->b_type;
    }

    /**
     * @param mixed $b_type
     */
    public function setBType($b_type): void
    {
        $this->b_type = $b_type;
    }

    /**
     * @return mixed
     */
    public function getAfterSaleStatusDesc()
    {
        return $this->after_sale_status_desc;
    }

    /**
     * @param mixed $after_sale_status_desc
     */
    public function setAfterSaleStatusDesc($after_sale_status_desc): void
    {
        $this->after_sale_status_desc = $after_sale_status_desc;
    }

    /**
     * @return mixed
     */
    public function getTrackingNo()
    {
        return $this->tracking_no;
    }

    /**
     * @param mixed $tracking_no
     */
    public function setTrackingNo($tracking_no): void
    {
        $this->tracking_no = $tracking_no;
    }

    /**
     * @return mixed
     */
    public function getPresellType()
    {
        return $this->presell_type;
    }

    /**
     * @param mixed $presell_type
     */
    public function setPresellType($presell_type): void
    {
        $this->presell_type = $presell_type;
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
    public function getAbnormalOrder()
    {
        return $this->abnormal_order;
    }

    /**
     * @param mixed $abnormal_order
     */
    public function setAbnormalOrder($abnormal_order): void
    {
        $this->abnormal_order = $abnormal_order;
    }

    /**
     * @return mixed
     */
    public function getTradeType()
    {
        return $this->trade_type;
    }

    /**
     * @param mixed $trade_type
     */
    public function setTradeType($trade_type): void
    {
        $this->trade_type = $trade_type;
    }

    /**
     * @return mixed
     */
    public function getCombineStatus()
    {
        return $this->combine_status;
    }

    /**
     * @param mixed $combine_status
     */
    public function setCombineStatus($combine_status): void
    {
        $this->combine_status = $combine_status;
    }

    /**
     * @return mixed
     */
    public function getUpdateTimeStart()
    {
        return $this->update_time_start;
    }

    /**
     * @param mixed $update_time_start
     */
    public function setUpdateTimeStart($update_time_start): void
    {
        $this->update_time_start = $update_time_start;
    }

    /**
     * @return mixed
     */
    public function getUpdateTimeEnd()
    {
        return $this->update_time_end;
    }

    /**
     * @param mixed $update_time_end
     */
    public function setUpdateTimeEnd($update_time_end): void
    {
        $this->update_time_end = $update_time_end;
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
    public function getOrderAsc()
    {
        return $this->order_asc;
    }

    /**
     * @param mixed $order_asc
     */
    public function setOrderAsc($order_asc): void
    {
        $this->order_asc = $order_asc;
    }

    /**
     * @return mixed
     */
    public function getIsSearchable()
    {
        return $this->is_searchable;
    }

    /**
     * @param mixed $is_searchable
     */
    public function setIsSearchable($is_searchable): void
    {
        $this->is_searchable = $is_searchable;
    }

}
