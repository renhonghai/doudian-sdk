<?php

namespace Renhonghai\DoudianSDK\Entities\Param\Order;

use Renhonghai\DoudianSDK\Entities\BaseEntity;


class AddressModifyParam extends BaseEntity
{

    public $order_id;

    public $post_addr;

    public $post_receiver;

    public $post_tel;

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
    public function getPostAddr()
    {
        return $this->post_addr;
    }

    /**
     * @param mixed $post_addr
     */
    public function setPostAddr($post_addr): void
    {
        $this->post_addr = $post_addr;
    }

    /**
     * @return mixed
     */
    public function getPostReceiver()
    {
        return $this->post_receiver;
    }

    /**
     * @param mixed $post_receiver
     */
    public function setPostReceiver($post_receiver): void
    {
        $this->post_receiver = $post_receiver;
    }

    /**
     * @return mixed
     */
    public function getPostTel()
    {
        return $this->post_tel;
    }

    /**
     * @param mixed $post_tel
     */
    public function setPostTel($post_tel): void
    {
        $this->post_tel = $post_tel;
    }

}
