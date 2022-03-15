<?php

namespace AK\DoudianSDK\Constants;

class MessageTagConstant
{

    /**
     * 消息种类
     * 100: 订单创建
     * 101: 订单支付成功
     * 103: 确认收货
     * 200: 买家申请售后(仅退款)
     * 201: 同意退款
     * 208: 买家修改售后申请消息
     */
    const TRADE_CREATE = "100";
    const TRADE_PAID = "101";
    const TRADE_SUCCESS = "103";
    const REFUND_CREATED = "200";
    const REFUND_AGREED = "201";
    const REFUND_MODIFIED = "208";

}