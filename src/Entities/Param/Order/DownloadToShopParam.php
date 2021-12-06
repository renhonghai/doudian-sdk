<?php

namespace AK\DoudianSDK\Entities\Param\Order;

use AK\DoudianSDK\Entities\BaseEntity;


class DownloadToShopParam extends BaseEntity
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
