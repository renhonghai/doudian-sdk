<?php

namespace Renhonghai\DoudianSDK\Entities\Param\Order;

use Renhonghai\DoudianSDK\Entities\BaseEntity;


class BatchSearchIndexParam extends BaseEntity
{

    public $plain_text_list;

    /**
     * @return mixed
     */
    public function getPlainTextList()
    {
        return $this->plain_text_list;
    }

    /**
     * @param mixed $plain_text_list
     */
    public function setPlainTextList($plain_text_list): void
    {
        $this->plain_text_list = $plain_text_list;
    }

}
