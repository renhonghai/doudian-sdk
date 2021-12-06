<?php

namespace AK\DoudianSDK\Entities\Param\AfterSale;

use AK\DoudianSDK\Entities\BaseEntity;


class SubmitEvidenceParam extends BaseEntity
{

    public $aftersale_id;

    public $comment;

    public $evidence;

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

}
