<?php

namespace Renhonghai\DoudianSDK\Entities\Param\Antispam;

use Renhonghai\DoudianSDK\Entities\BaseEntity;


class OrderQueryParam extends BaseEntity
{

    public $event_time;

    public $user;

    public $params;

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

}
