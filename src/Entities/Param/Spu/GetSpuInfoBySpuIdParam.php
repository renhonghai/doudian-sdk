<?php

namespace Renhonghai\DoudianSDK\Entities\Param\Spu;

use Renhonghai\DoudianSDK\Entities\BaseEntity;


class GetSpuInfoBySpuIdParam extends BaseEntity
{

    public $spu_id;

    /**
     * @return mixed
     */
    public function getSpuId()
    {
        return $this->spu_id;
    }

    /**
     * @param mixed $spu_id
     */
    public function setSpuId($spu_id): void
    {
        $this->spu_id = $spu_id;
    }

}
