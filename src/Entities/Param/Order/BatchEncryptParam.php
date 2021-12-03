<?php

namespace Renhonghai\DoudianSDK\Entities\Param\Order;

use Renhonghai\DoudianSDK\Entities\BaseEntity;


class BatchEncryptParam extends BaseEntity
{

    public $batch_encrypt_list;

    public $sensitive_scene;

    /**
     * @return mixed
     */
    public function getBatchEncryptList()
    {
        return $this->batch_encrypt_list;
    }

    /**
     * @param mixed $batch_encrypt_list
     */
    public function setBatchEncryptList($batch_encrypt_list): void
    {
        $this->batch_encrypt_list = $batch_encrypt_list;
    }

    /**
     * @return mixed
     */
    public function getSensitiveScene()
    {
        return $this->sensitive_scene;
    }

    /**
     * @param mixed $sensitive_scene
     */
    public function setSensitiveScene($sensitive_scene): void
    {
        $this->sensitive_scene = $sensitive_scene;
    }

}
