<?php

namespace Renhonghai\DoudianSDK\Entities\Param\Order;

use Renhonghai\DoudianSDK\Entities\BaseEntity;


class UpdateOrderAmountParam extends BaseEntity
{

    public $pid;

    public $update_detail;

    /**
     * @return mixed
     */
    public function getPid()
    {
        return $this->pid;
    }

    /**
     * @param mixed $pid
     */
    public function setPid($pid): void
    {
        $this->pid = $pid;
    }

    /**
     * @return mixed
     */
    public function getUpdateDetail()
    {
        return $this->update_detail;
    }

    /**
     * @param mixed $update_detail
     */
    public function setUpdateDetail($update_detail): void
    {
        $this->update_detail = $update_detail;
    }

}
