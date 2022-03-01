<?php

namespace AK\DoudianSDK\Entities\Param\AfterSale;

use AK\DoudianSDK\Entities\BaseEntity;

class OperateItemParam extends BaseEntity
{

    public $aftersale_id;

    public $reason;

    public $remark;

    public $evidence;

    public $logistics;

    public $update_time;

    public $reject_reason_code;

    /**
     * @return mixed
     */
    public function getAftersaleId()
    {
        return $this->aftersale_id;
    }

    /**
     * @param mixed $aftersale_id
     */
    public function setAftersaleId($aftersale_id): void
    {
        $this->aftersale_id = $aftersale_id;
    }

    /**
     * @return mixed
     */
    public function getReason()
    {
        return $this->reason;
    }

    /**
     * @param mixed $reason
     */
    public function setReason($reason): void
    {
        $this->reason = $reason;
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

    /**
     * @return mixed
     */
    public function getLogistics()
    {
        return $this->logistics;
    }

    /**
     * @param mixed $logistics
     */
    public function setLogistics($logistics): void
    {
        $this->logistics = $logistics;
    }

    /**
     * @return mixed
     */
    public function getUpdateTime()
    {
        return $this->update_time;
    }

    /**
     * @param mixed $update_time
     */
    public function setUpdateTime($update_time): void
    {
        $this->update_time = $update_time;
    }

    /**
     * @return mixed
     */
    public function getRejectReasonCode()
    {
        return $this->reject_reason_code;
    }

    /**
     * @param mixed $reject_reason_code
     */
    public function setRejectReasonCode($reject_reason_code): void
    {
        $this->reject_reason_code = $reject_reason_code;
    }

}