<?php

namespace Renhonghai\DoudianSDK\Entities\Param\Logistics;

use Renhonghai\DoudianSDK\Entities\BaseEntity;


class CreateSFOrderParam extends BaseEntity
{

    public $order_id;

    public $pack_id;

    public $cargo_details;

    public $service_list;

    public $contact_info_list;

    public $pay_method;

    public $express_type_id;

    public $parcel_qty;

    public $total_weight;

    public $is_sign_back;

    public $remark;

    public $total_length;

    public $total_width;

    public $total_height;

    public $volume;

    public $user_id;

    public $order_channel;

    /**
     * @return mixed
     */
    public function getOrderId()
    {
        return $this->order_id;
    }

    /**
     * @param mixed $order_id
     */
    public function setOrderId($order_id): void
    {
        $this->order_id = $order_id;
    }

    /**
     * @return mixed
     */
    public function getPackId()
    {
        return $this->pack_id;
    }

    /**
     * @param mixed $pack_id
     */
    public function setPackId($pack_id): void
    {
        $this->pack_id = $pack_id;
    }

    /**
     * @return mixed
     */
    public function getCargoDetails()
    {
        return $this->cargo_details;
    }

    /**
     * @param mixed $cargo_details
     */
    public function setCargoDetails($cargo_details): void
    {
        $this->cargo_details = $cargo_details;
    }

    /**
     * @return mixed
     */
    public function getServiceList()
    {
        return $this->service_list;
    }

    /**
     * @param mixed $service_list
     */
    public function setServiceList($service_list): void
    {
        $this->service_list = $service_list;
    }

    /**
     * @return mixed
     */
    public function getContactInfoList()
    {
        return $this->contact_info_list;
    }

    /**
     * @param mixed $contact_info_list
     */
    public function setContactInfoList($contact_info_list): void
    {
        $this->contact_info_list = $contact_info_list;
    }

    /**
     * @return mixed
     */
    public function getPayMethod()
    {
        return $this->pay_method;
    }

    /**
     * @param mixed $pay_method
     */
    public function setPayMethod($pay_method): void
    {
        $this->pay_method = $pay_method;
    }

    /**
     * @return mixed
     */
    public function getExpressTypeId()
    {
        return $this->express_type_id;
    }

    /**
     * @param mixed $express_type_id
     */
    public function setExpressTypeId($express_type_id): void
    {
        $this->express_type_id = $express_type_id;
    }

    /**
     * @return mixed
     */
    public function getParcelQty()
    {
        return $this->parcel_qty;
    }

    /**
     * @param mixed $parcel_qty
     */
    public function setParcelQty($parcel_qty): void
    {
        $this->parcel_qty = $parcel_qty;
    }

    /**
     * @return mixed
     */
    public function getTotalWeight()
    {
        return $this->total_weight;
    }

    /**
     * @param mixed $total_weight
     */
    public function setTotalWeight($total_weight): void
    {
        $this->total_weight = $total_weight;
    }

    /**
     * @return mixed
     */
    public function getIsSignBack()
    {
        return $this->is_sign_back;
    }

    /**
     * @param mixed $is_sign_back
     */
    public function setIsSignBack($is_sign_back): void
    {
        $this->is_sign_back = $is_sign_back;
    }

    /**
     * @return mixed
     */
    public function getRemark()
    {
        return $this->remark;
    }

    /**
     * @param mixed $remark
     */
    public function setRemark($remark): void
    {
        $this->remark = $remark;
    }

    /**
     * @return mixed
     */
    public function getTotalLength()
    {
        return $this->total_length;
    }

    /**
     * @param mixed $total_length
     */
    public function setTotalLength($total_length): void
    {
        $this->total_length = $total_length;
    }

    /**
     * @return mixed
     */
    public function getTotalWidth()
    {
        return $this->total_width;
    }

    /**
     * @param mixed $total_width
     */
    public function setTotalWidth($total_width): void
    {
        $this->total_width = $total_width;
    }

    /**
     * @return mixed
     */
    public function getTotalHeight()
    {
        return $this->total_height;
    }

    /**
     * @param mixed $total_height
     */
    public function setTotalHeight($total_height): void
    {
        $this->total_height = $total_height;
    }

    /**
     * @return mixed
     */
    public function getVolume()
    {
        return $this->volume;
    }

    /**
     * @param mixed $volume
     */
    public function setVolume($volume): void
    {
        $this->volume = $volume;
    }

    /**
     * @return mixed
     */
    public function getUserId()
    {
        return $this->user_id;
    }

    /**
     * @param mixed $user_id
     */
    public function setUserId($user_id): void
    {
        $this->user_id = $user_id;
    }

    /**
     * @return mixed
     */
    public function getOrderChannel()
    {
        return $this->order_channel;
    }

    /**
     * @param mixed $order_channel
     */
    public function setOrderChannel($order_channel): void
    {
        $this->order_channel = $order_channel;
    }

}
