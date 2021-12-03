<?php

namespace Renhonghai\DoudianSDK\Entities\Param\Order;

use Renhonghai\DoudianSDK\Entities\BaseEntity;


class DownloadShopAccountItemFileParam extends BaseEntity
{

    public $download_id;

    /**
     * @return mixed
     */
    public function getDownloadId()
    {
        return $this->download_id;
    }

    /**
     * @param mixed $download_id
     */
    public function setDownloadId($download_id): void
    {
        $this->download_id = $download_id;
    }

}
