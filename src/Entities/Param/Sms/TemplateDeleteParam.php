<?php

namespace Renhonghai\DoudianSDK\Entities\Param\Sms;

use Renhonghai\DoudianSDK\Entities\BaseEntity;


class TemplateDeleteParam extends BaseEntity
{

    public $sms_account;

    public $template_id;

    /**
     * @return mixed
     */
    public function getSmsAccount()
    {
        return $this->sms_account;
    }

    /**
     * @param mixed $sms_account
     */
    public function setSmsAccount($sms_account): void
    {
        $this->sms_account = $sms_account;
    }

    /**
     * @return mixed
     */
    public function getTemplateId()
    {
        return $this->template_id;
    }

    /**
     * @param mixed $template_id
     */
    public function setTemplateId($template_id): void
    {
        $this->template_id = $template_id;
    }

}
