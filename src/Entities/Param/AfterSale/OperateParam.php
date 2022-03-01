<?php

namespace AK\DoudianSDK\Entities\Param\AfterSale;

use AK\DoudianSDK\Entities\BaseEntity;


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
     * @return OperateItemParam[]
     */
    public function getItems(): array
    {
        return $this->items;
    }

    /**
     * @param OperateItemParam[] $items
     */
    public function setItems(array $items): void
    {
        $this->items = $items;
    }

    /**
     * @param OperateItemParam $item
     */
    public function setItem(OperateItemParam $item)
    {
        $this->items[] = $item;
    }

}
