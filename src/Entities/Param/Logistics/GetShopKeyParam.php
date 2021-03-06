<?php

namespace AK\DoudianSDK\Entities\Param\Logistics;

use AK\DoudianSDK\Entities\BaseEntity;


class GetShopKeyParam extends BaseEntity
{

    public $cipher_text;

    /**
     * @return mixed
     */
    public function getCipherText()
    {
        return $this->cipher_text;
    }

    /**
     * @param mixed $cipher_text
     */
    public function setCipherText($cipher_text): void
    {
        $this->cipher_text = $cipher_text;
    }

}
