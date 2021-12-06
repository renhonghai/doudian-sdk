<?php

namespace AK\DoudianSDK\Entities\Param\Order;

use AK\DoudianSDK\Entities\BaseEntity;


class BatchDecryptParam extends BaseEntity
{

    public $cipher_infos;

    /**
     * @return mixed
     */
    public function getCipherInfos()
    {
        return $this->cipher_infos;
    }

    /**
     * @param mixed $cipher_infos
     */
    public function setCipherInfos($cipher_infos): void
    {
        $this->cipher_infos = $cipher_infos;
    }

}
