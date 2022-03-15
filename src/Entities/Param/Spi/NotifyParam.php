<?php

namespace AK\DoudianSDK\Entities\Param\Spi;

use AK\DoudianSDK\Entities\BaseEntity;

class NotifyParam extends BaseEntity
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
     * @var string $time_start
     */
    private $time_start;

    /**
     * @var string $time_limit
     */
    private $time_limit;

    /**
     * @var string $buy_num
     */
    private $buy_num;

    /**
     * @var string $amount_unit
     */
    private $amount_unit;

    /**
     * @var string $sku_id
     */
    private $sku_id;

    /**
     * @var string $shop_id
     */
    private $shop_id;

    /**
     * @var string $code
     */
    private $code;

    /**
     * @var string $pay_amount
     */
    private $pay_amount;

    /**
     * @var NotifyAccountParam[] $account_list
     */
    private $account_list;

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
    public function getTimeStart(): string
    {
        return $this->time_start;
    }

    /**
     * @param string $time_start
     */
    public function setTimeStart(string $time_start): void
    {
        $this->time_start = $time_start;
    }

    /**
     * @return string
     */
    public function getTimeLimit(): string
    {
        return $this->time_limit;
    }

    /**
     * @param string $time_limit
     */
    public function setTimeLimit(string $time_limit): void
    {
        $this->time_limit = $time_limit;
    }

    /**
     * @return string
     */
    public function getBuyNum(): string
    {
        return $this->buy_num;
    }

    /**
     * @param string $buy_num
     */
    public function setBuyNum(string $buy_num): void
    {
        $this->buy_num = $buy_num;
    }

    /**
     * @return string
     */
    public function getAmountUnit(): string
    {
        return $this->amount_unit;
    }

    /**
     * @param string $amount_unit
     */
    public function setAmountUnit(string $amount_unit): void
    {
        $this->amount_unit = $amount_unit;
    }

    /**
     * @return string
     */
    public function getSkuId(): string
    {
        return $this->sku_id;
    }

    /**
     * @param string $sku_id
     */
    public function setSkuId(string $sku_id): void
    {
        $this->sku_id = $sku_id;
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

    /**
     * @return string
     */
    public function getCode(): string
    {
        return $this->code;
    }

    /**
     * @param string $code
     */
    public function setCode(string $code): void
    {
        $this->code = $code;
    }

    /**
     * @return string
     */
    public function getPayAmount(): string
    {
        return $this->pay_amount;
    }

    /**
     * @param string $pay_amount
     */
    public function setPayAmount(string $pay_amount): void
    {
        $this->pay_amount = $pay_amount;
    }

    /**
     * @return NotifyAccountParam[]
     */
    public function getAccountList(): array
    {
        return $this->account_list;
    }

    /**
     * @param NotifyAccountParam[] $account_list
     */
    public function setAccountList(array $account_list): void
    {
        $this->account_list = $account_list;
    }

}