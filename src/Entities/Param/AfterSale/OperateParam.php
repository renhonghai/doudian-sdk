<?php

namespace Renhonghai\DoudianSDK\Entities\Param\AfterSale;

use Renhonghai\DoudianSDK\Entities\BaseEntity;


class OperateParam extends BaseEntity
{

    public $type;

    public $items;

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param mixed $type
     */
    public function setType($type): void
    {
        $this->type = $type;
    }

    /**
     * @return mixed
     */
    public function getItems()
    {
        return $this->items;
    }

    /**
     * @param mixed $items
     */
    public function setItems($items): void
    {
        $this->items = $items;
    }

}
