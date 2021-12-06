<?php

namespace AK\DoudianSDK\Entities\Param\Product;

use AK\DoudianSDK\Entities\BaseEntity;


class AddV2Param extends BaseEntity
{

    public $outer_product_id;

    public $product_type;

    public $category_leaf_id;

    public $product_format;

    public $name;

    public $recommend_remark;

    public $pic;

    public $description;

    public $pay_type;

    public $delivery_method;

    public $cdf_category;

    public $reduce_type;

    public $assoc_ids;

    public $freight_id;

    public $weight;

    public $weight_unit;

    public $delivery_delay_day;

    public $presell_type;

    public $presell_delay;

    public $presell_end_time;

    public $supply_7day_return;

    public $mobile;

    public $commit;

    public $brand_id;

    public $remark;

    public $out_product_id;

    public $quality_list;

    public $spec_name;

    public $specs;

    public $spec_prices;

    public $spec_pic;

    public $maximum_per_order;

    public $limit_per_buyer;

    public $minimum_per_order;

    public $product_format_new;

    public $spu_id;

    public $appoint_delivery_day;

    public $third_url;

    public $extra;

    public $src;

    public $market_price;

    public $discount_price;

    public $standard_brand_id;

    public $need_check_out;

    public $poi_resource;

    /**
     * @return mixed
     */
    public function getOuterProductId()
    {
        return $this->outer_product_id;
    }

    /**
     * @param mixed $outer_product_id
     */
    public function setOuterProductId($outer_product_id): void
    {
        $this->outer_product_id = $outer_product_id;
    }

    /**
     * @return mixed
     */
    public function getProductType()
    {
        return $this->product_type;
    }

    /**
     * @param mixed $product_type
     */
    public function setProductType($product_type): void
    {
        $this->product_type = $product_type;
    }

    /**
     * @return mixed
     */
    public function getCategoryLeafId()
    {
        return $this->category_leaf_id;
    }

    /**
     * @param mixed $category_leaf_id
     */
    public function setCategoryLeafId($category_leaf_id): void
    {
        $this->category_leaf_id = $category_leaf_id;
    }

    /**
     * @return mixed
     */
    public function getProductFormat()
    {
        return $this->product_format;
    }

    /**
     * @param mixed $product_format
     */
    public function setProductFormat($product_format): void
    {
        $this->product_format = $product_format;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name): void
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getRecommendRemark()
    {
        return $this->recommend_remark;
    }

    /**
     * @param mixed $recommend_remark
     */
    public function setRecommendRemark($recommend_remark): void
    {
        $this->recommend_remark = $recommend_remark;
    }

    /**
     * @return mixed
     */
    public function getPic()
    {
        return $this->pic;
    }

    /**
     * @param mixed $pic
     */
    public function setPic($pic): void
    {
        $this->pic = $pic;
    }

    /**
     * @return mixed
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * @param mixed $description
     */
    public function setDescription($description): void
    {
        $this->description = $description;
    }

    /**
     * @return mixed
     */
    public function getPayType()
    {
        return $this->pay_type;
    }

    /**
     * @param mixed $pay_type
     */
    public function setPayType($pay_type): void
    {
        $this->pay_type = $pay_type;
    }

    /**
     * @return mixed
     */
    public function getDeliveryMethod()
    {
        return $this->delivery_method;
    }

    /**
     * @param mixed $delivery_method
     */
    public function setDeliveryMethod($delivery_method): void
    {
        $this->delivery_method = $delivery_method;
    }

    /**
     * @return mixed
     */
    public function getCdfCategory()
    {
        return $this->cdf_category;
    }

    /**
     * @param mixed $cdf_category
     */
    public function setCdfCategory($cdf_category): void
    {
        $this->cdf_category = $cdf_category;
    }

    /**
     * @return mixed
     */
    public function getReduceType()
    {
        return $this->reduce_type;
    }

    /**
     * @param mixed $reduce_type
     */
    public function setReduceType($reduce_type): void
    {
        $this->reduce_type = $reduce_type;
    }

    /**
     * @return mixed
     */
    public function getAssocIds()
    {
        return $this->assoc_ids;
    }

    /**
     * @param mixed $assoc_ids
     */
    public function setAssocIds($assoc_ids): void
    {
        $this->assoc_ids = $assoc_ids;
    }

    /**
     * @return mixed
     */
    public function getFreightId()
    {
        return $this->freight_id;
    }

    /**
     * @param mixed $freight_id
     */
    public function setFreightId($freight_id): void
    {
        $this->freight_id = $freight_id;
    }

    /**
     * @return mixed
     */
    public function getWeight()
    {
        return $this->weight;
    }

    /**
     * @param mixed $weight
     */
    public function setWeight($weight): void
    {
        $this->weight = $weight;
    }

    /**
     * @return mixed
     */
    public function getWeightUnit()
    {
        return $this->weight_unit;
    }

    /**
     * @param mixed $weight_unit
     */
    public function setWeightUnit($weight_unit): void
    {
        $this->weight_unit = $weight_unit;
    }

    /**
     * @return mixed
     */
    public function getDeliveryDelayDay()
    {
        return $this->delivery_delay_day;
    }

    /**
     * @param mixed $delivery_delay_day
     */
    public function setDeliveryDelayDay($delivery_delay_day): void
    {
        $this->delivery_delay_day = $delivery_delay_day;
    }

    /**
     * @return mixed
     */
    public function getPresellType()
    {
        return $this->presell_type;
    }

    /**
     * @param mixed $presell_type
     */
    public function setPresellType($presell_type): void
    {
        $this->presell_type = $presell_type;
    }

    /**
     * @return mixed
     */
    public function getPresellDelay()
    {
        return $this->presell_delay;
    }

    /**
     * @param mixed $presell_delay
     */
    public function setPresellDelay($presell_delay): void
    {
        $this->presell_delay = $presell_delay;
    }

    /**
     * @return mixed
     */
    public function getPresellEndTime()
    {
        return $this->presell_end_time;
    }

    /**
     * @param mixed $presell_end_time
     */
    public function setPresellEndTime($presell_end_time): void
    {
        $this->presell_end_time = $presell_end_time;
    }

    /**
     * @return mixed
     */
    public function getSupply7dayReturn()
    {
        return $this->supply_7day_return;
    }

    /**
     * @param mixed $supply_7day_return
     */
    public function setSupply7dayReturn($supply_7day_return): void
    {
        $this->supply_7day_return = $supply_7day_return;
    }

    /**
     * @return mixed
     */
    public function getMobile()
    {
        return $this->mobile;
    }

    /**
     * @param mixed $mobile
     */
    public function setMobile($mobile): void
    {
        $this->mobile = $mobile;
    }

    /**
     * @return mixed
     */
    public function getCommit()
    {
        return $this->commit;
    }

    /**
     * @param mixed $commit
     */
    public function setCommit($commit): void
    {
        $this->commit = $commit;
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
    public function getRemark()
    {
        return $this->remark;
    }

    /**
     * @param mixed $remark
     */
    public function setRemark($remark): void
    {
        $this->remark = $remark;
    }

    /**
     * @return mixed
     */
    public function getOutProductId()
    {
        return $this->out_product_id;
    }

    /**
     * @param mixed $out_product_id
     */
    public function setOutProductId($out_product_id): void
    {
        $this->out_product_id = $out_product_id;
    }

    /**
     * @return mixed
     */
    public function getQualityList()
    {
        return $this->quality_list;
    }

    /**
     * @param mixed $quality_list
     */
    public function setQualityList($quality_list): void
    {
        $this->quality_list = $quality_list;
    }

    /**
     * @return mixed
     */
    public function getSpecName()
    {
        return $this->spec_name;
    }

    /**
     * @param mixed $spec_name
     */
    public function setSpecName($spec_name): void
    {
        $this->spec_name = $spec_name;
    }

    /**
     * @return mixed
     */
    public function getSpecs()
    {
        return $this->specs;
    }

    /**
     * @param mixed $specs
     */
    public function setSpecs($specs): void
    {
        $this->specs = $specs;
    }

    /**
     * @return mixed
     */
    public function getSpecPrices()
    {
        return $this->spec_prices;
    }

    /**
     * @param mixed $spec_prices
     */
    public function setSpecPrices($spec_prices): void
    {
        $this->spec_prices = $spec_prices;
    }

    /**
     * @return mixed
     */
    public function getSpecPic()
    {
        return $this->spec_pic;
    }

    /**
     * @param mixed $spec_pic
     */
    public function setSpecPic($spec_pic): void
    {
        $this->spec_pic = $spec_pic;
    }

    /**
     * @return mixed
     */
    public function getMaximumPerOrder()
    {
        return $this->maximum_per_order;
    }

    /**
     * @param mixed $maximum_per_order
     */
    public function setMaximumPerOrder($maximum_per_order): void
    {
        $this->maximum_per_order = $maximum_per_order;
    }

    /**
     * @return mixed
     */
    public function getLimitPerBuyer()
    {
        return $this->limit_per_buyer;
    }

    /**
     * @param mixed $limit_per_buyer
     */
    public function setLimitPerBuyer($limit_per_buyer): void
    {
        $this->limit_per_buyer = $limit_per_buyer;
    }

    /**
     * @return mixed
     */
    public function getMinimumPerOrder()
    {
        return $this->minimum_per_order;
    }

    /**
     * @param mixed $minimum_per_order
     */
    public function setMinimumPerOrder($minimum_per_order): void
    {
        $this->minimum_per_order = $minimum_per_order;
    }

    /**
     * @return mixed
     */
    public function getProductFormatNew()
    {
        return $this->product_format_new;
    }

    /**
     * @param mixed $product_format_new
     */
    public function setProductFormatNew($product_format_new): void
    {
        $this->product_format_new = $product_format_new;
    }

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

    /**
     * @return mixed
     */
    public function getAppointDeliveryDay()
    {
        return $this->appoint_delivery_day;
    }

    /**
     * @param mixed $appoint_delivery_day
     */
    public function setAppointDeliveryDay($appoint_delivery_day): void
    {
        $this->appoint_delivery_day = $appoint_delivery_day;
    }

    /**
     * @return mixed
     */
    public function getThirdUrl()
    {
        return $this->third_url;
    }

    /**
     * @param mixed $third_url
     */
    public function setThirdUrl($third_url): void
    {
        $this->third_url = $third_url;
    }

    /**
     * @return mixed
     */
    public function getExtra()
    {
        return $this->extra;
    }

    /**
     * @param mixed $extra
     */
    public function setExtra($extra): void
    {
        $this->extra = $extra;
    }

    /**
     * @return mixed
     */
    public function getSrc()
    {
        return $this->src;
    }

    /**
     * @param mixed $src
     */
    public function setSrc($src): void
    {
        $this->src = $src;
    }

    /**
     * @return mixed
     */
    public function getMarketPrice()
    {
        return $this->market_price;
    }

    /**
     * @param mixed $market_price
     */
    public function setMarketPrice($market_price): void
    {
        $this->market_price = $market_price;
    }

    /**
     * @return mixed
     */
    public function getDiscountPrice()
    {
        return $this->discount_price;
    }

    /**
     * @param mixed $discount_price
     */
    public function setDiscountPrice($discount_price): void
    {
        $this->discount_price = $discount_price;
    }

    /**
     * @return mixed
     */
    public function getStandardBrandId()
    {
        return $this->standard_brand_id;
    }

    /**
     * @param mixed $standard_brand_id
     */
    public function setStandardBrandId($standard_brand_id): void
    {
        $this->standard_brand_id = $standard_brand_id;
    }

    /**
     * @return mixed
     */
    public function getNeedCheckOut()
    {
        return $this->need_check_out;
    }

    /**
     * @param mixed $need_check_out
     */
    public function setNeedCheckOut($need_check_out): void
    {
        $this->need_check_out = $need_check_out;
    }

    /**
     * @return mixed
     */
    public function getPoiResource()
    {
        return $this->poi_resource;
    }

    /**
     * @param mixed $poi_resource
     */
    public function setPoiResource($poi_resource): void
    {
        $this->poi_resource = $poi_resource;
    }

}
