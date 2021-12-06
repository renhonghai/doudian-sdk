<?php

namespace AK\DoudianSDK\Entities\Param\Product;

use AK\DoudianSDK\Entities\BaseEntity;


class QualityTaskParam extends BaseEntity
{

    public $brief_only;

    /**
     * @return mixed
     */
    public function getBriefOnly()
    {
        return $this->brief_only;
    }

    /**
     * @param mixed $brief_only
     */
    public function setBriefOnly($brief_only): void
    {
        $this->brief_only = $brief_only;
    }

}
