<?php

namespace Renhonghai\DoudianSDK\Entities\Param\Logistics;

use Renhonghai\DoudianSDK\Entities\BaseEntity;


class UpdateOrderParam extends BaseEntity
{

    public $sender_info;

    public $receiver_info;

    public $logistics_code;

    public $track_no;

    public $items;

    public $remark;

    public $extra;

    public $user_id;

    public $volume;

    public $weight;

    /**
     * @return mixed
     */
    public function getSenderInfo()
    {
        return $this->sender_info;
    }

    /**
     * @param mixed $sender_info
     */
    public function setSenderInfo($sender_info): void
    {
        $this->sender_info = $sender_info;
    }

    /**
     * @return mixed
     */
    public function getReceiverInfo()
    {
        return $this->receiver_info;
    }

    /**
     * @param mixed $receiver_info
     */
    public function setReceiverInfo($receiver_info): void
    {
        $this->receiver_info = $receiver_info;
    }

    /**
     * @return mixed
     */
    public function getLogisticsCode()
    {
        return $this->logistics_code;
    }

    /**
     * @param mixed $logistics_code
     */
    public function setLogisticsCode($logistics_code): void
    {
        $this->logistics_code = $logistics_code;
    }

    /**
     * @return mixed
     */
    public function getTrackNo()
    {
        return $this->track_no;
    }

    /**
     * @param mixed $track_no
     */
    public function setTrackNo($track_no): void
    {
        $this->track_no = $track_no;
    }

    /**
     * @return mixed
     */
    public function getItems()
    {
        return $this->items;
    }

    /**
     * @param mixed $items
     */
    public function setItems($items): void
    {
        $this->items = $items;
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
    public function getExtra()
    {
        return $this->extra;
    }

    /**
     * @param mixed $extra
     */
    public function setExtra($extra): void
    {
        $this->extra = $extra;
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
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * @param mixed $weight
     */
    public function setWeight($weight): void
    {
        $this->weight = $weight;
    }

}
