<?php

namespace Renhonghai\DoudianSDK\Entities\Param\Spu;

use Renhonghai\DoudianSDK\Entities\BaseEntity;


class AddShopSpuParam extends BaseEntity
{

    public $spu_name;

    public $upc_code;

    public $category_id;

    public $brand_id;

    public $property_infos;

    /**
     * @return mixed
     */
    public function getSpuName()
    {
        return $this->spu_name;
    }

    /**
     * @param mixed $spu_name
     */
    public function setSpuName($spu_name): void
    {
        $this->spu_name = $spu_name;
    }

    /**
     * @return mixed
     */
    public function getUpcCode()
    {
        return $this->upc_code;
    }

    /**
     * @param mixed $upc_code
     */
    public function setUpcCode($upc_code): void
    {
        $this->upc_code = $upc_code;
    }

    /**
     * @return mixed
     */
    public function getCategoryId()
    {
        return $this->category_id;
    }

    /**
     * @param mixed $category_id
     */
    public function setCategoryId($category_id): void
    {
        $this->category_id = $category_id;
    }

    /**
     * @return mixed
     */
    public function getBrandId()
    {
        return $this->brand_id;
    }

    /**
     * @param mixed $brand_id
     */
    public function setBrandId($brand_id): void
    {
        $this->brand_id = $brand_id;
    }

    /**
     * @return mixed
     */
    public function getPropertyInfos()
    {
        return $this->property_infos;
    }

    /**
     * @param mixed $property_infos
     */
    public function setPropertyInfos($property_infos): void
    {
        $this->property_infos = $property_infos;
    }

}
