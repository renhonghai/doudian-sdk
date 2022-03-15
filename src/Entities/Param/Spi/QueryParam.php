<?php

namespace AK\DoudianSDK\Entities\Param\Spi;

use AK\DoudianSDK\Entities\BaseEntity;

class QueryParam extends BaseEntity
{

    /**
     * @var string $trade_order_no
     */
    private $trade_order_no;

    /**
     * @var string $topup_biz
     */
    private $topup_biz;

    /**
     * @var string $shop_id
     */
    private $shop_id;

    /**
     * @return string
     */
    public function getTradeOrderNo(): string
    {
        return $this->trade_order_no;
    }

    /**
     * @param string $trade_order_no
     */
    public function setTradeOrderNo(string $trade_order_no): void
    {
        $this->trade_order_no = $trade_order_no;
    }

    /**
     * @return string
     */
    public function getTopupBiz(): string
    {
        return $this->topup_biz;
    }

    /**
     * @param string $topup_biz
     */
    public function setTopupBiz(string $topup_biz): void
    {
        $this->topup_biz = $topup_biz;
    }

    /**
     * @return string
     */
    public function getShopId(): string
    {
        return $this->shop_id;
    }

    /**
     * @param string $shop_id
     */
    public function setShopId(string $shop_id): void
    {
        $this->shop_id = $shop_id;
    }

}