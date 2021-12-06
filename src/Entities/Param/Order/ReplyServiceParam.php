<?php

namespace AK\DoudianSDK\Entities\Param\Order;

use AK\DoudianSDK\Entities\BaseEntity;


class ReplyServiceParam extends BaseEntity
{

    public $id;

    public $reply;

    public $evidence;

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @param mixed $id
     */
    public function setId($id): void
    {
        $this->id = $id;
    }

    /**
     * @return mixed
     */
    public function getReply()
    {
        return $this->reply;
    }

    /**
     * @param mixed $reply
     */
    public function setReply($reply): void
    {
        $this->reply = $reply;
    }

    /**
     * @return mixed
     */
    public function getEvidence()
    {
        return $this->evidence;
    }

    /**
     * @param mixed $evidence
     */
    public function setEvidence($evidence): void
    {
        $this->evidence = $evidence;
    }

}
