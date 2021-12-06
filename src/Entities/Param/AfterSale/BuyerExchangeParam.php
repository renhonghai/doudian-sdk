<?php

namespace AK\DoudianSDK\Entities\Param\AfterSale;

use AK\DoudianSDK\Entities\BaseEntity;


class BuyerExchangeParam extends BaseEntity
{

    public $aftersale_id;

    public $is_reject;

    public $sms_id;

    public $comment;

    public $evidence;

    public $address_id;

    public $remark;

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
    public function getIsReject()
    {
        return $this->is_reject;
    }

    /**
     * @param mixed $is_reject
     */
    public function setIsReject($is_reject): void
    {
        $this->is_reject = $is_reject;
    }

    /**
     * @return mixed
     */
    public function getSmsId()
    {
        return $this->sms_id;
    }

    /**
     * @param mixed $sms_id
     */
    public function setSmsId($sms_id): void
    {
        $this->sms_id = $sms_id;
    }

    /**
     * @return mixed
     */
    public function getComment()
    {
        return $this->comment;
    }

    /**
     * @param mixed $comment
     */
    public function setComment($comment): void
    {
        $this->comment = $comment;
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
    public function getAddressId()
    {
        return $this->address_id;
    }

    /**
     * @param mixed $address_id
     */
    public function setAddressId($address_id): void
    {
        $this->address_id = $address_id;
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

}
