<?php

namespace AK\DoudianSDK\Entities\Param\Antispam;

use AK\DoudianSDK\Entities\BaseEntity;


class UserLoginParam extends BaseEntity
{

    public $params;

    public $event_time;

    public $user;

    /**
     * @return mixed
     */
    public function getParams()
    {
        return $this->params;
    }

    /**
     * @param mixed $params
     */
    public function setParams($params): void
    {
        $this->params = $params;
    }

    /**
     * @return mixed
     */
    public function getEventTime()
    {
        return $this->event_time;
    }

    /**
     * @param mixed $event_time
     */
    public function setEventTime($event_time): void
    {
        $this->event_time = $event_time;
    }

    /**
     * @return mixed
     */
    public function getUser()
    {
        return $this->user;
    }

    /**
     * @param mixed $user
     */
    public function setUser($user): void
    {
        $this->user = $user;
    }

}
