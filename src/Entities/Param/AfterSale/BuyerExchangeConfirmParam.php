<?php

namespace Renhonghai\DoudianSDK\Entities\Param\AfterSale;

use Renhonghai\DoudianSDK\Entities\BaseEntity;


class BuyerExchangeConfirmParam extends BaseEntity
{

    public $aftersale_id;

    public $is_reject;

    public $action;

    public $comment;

    public $evidence;

    public $logistics_code;

    public $company_code;

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
    public function getAction()
    {
        return $this->action;
    }

    /**
     * @param mixed $action
     */
    public function setAction($action): void
    {
        $this->action = $action;
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
    public function getCompanyCode()
    {
        return $this->company_code;
    }

    /**
     * @param mixed $company_code
     */
    public function setCompanyCode($company_code): void
    {
        $this->company_code = $company_code;
    }

}
