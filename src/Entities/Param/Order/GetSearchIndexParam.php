<?php

namespace AK\DoudianSDK\Entities\Param\Order;

use AK\DoudianSDK\Entities\BaseEntity;


class GetSearchIndexParam extends BaseEntity
{

    public $plain_text;

    public $sensitive_type;

    /**
     * @return mixed
     */
    public function getPlainText()
    {
        return $this->plain_text;
    }

    /**
     * @param mixed $plain_text
     */
    public function setPlainText($plain_text): void
    {
        $this->plain_text = $plain_text;
    }

    /**
     * @return mixed
     */
    public function getSensitiveType()
    {
        return $this->sensitive_type;
    }

    /**
     * @param mixed $sensitive_type
     */
    public function setSensitiveType($sensitive_type): void
    {
        $this->sensitive_type = $sensitive_type;
    }

}
