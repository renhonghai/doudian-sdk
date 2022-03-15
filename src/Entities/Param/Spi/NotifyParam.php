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

}