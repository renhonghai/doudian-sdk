<?php

namespace AK\DoudianSDK\Entities\Param\Sms;

use AK\DoudianSDK\Entities\BaseEntity;


class TemplateRevokeParam extends BaseEntity
{

    public $sms_account;

    public $sms_template_apply_id;

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
    public function getSmsTemplateApplyId()
    {
        return $this->sms_template_apply_id;
    }

    /**
     * @param mixed $sms_template_apply_id
     */
    public function setSmsTemplateApplyId($sms_template_apply_id): void
    {
        $this->sms_template_apply_id = $sms_template_apply_id;
    }

}
