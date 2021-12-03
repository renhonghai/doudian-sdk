<?php

namespace Renhonghai\DoudianSDK\Entities\Param\Order;

use Renhonghai\DoudianSDK\Entities\BaseEntity;


class BatchSensitiveParam extends BaseEntity
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
