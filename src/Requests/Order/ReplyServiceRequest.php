<?php

namespace AK\DoudianSDK\Requests\Order;

use AK\DoudianSDK\Requests\AbstractRequest;

class ReplyServiceRequest extends AbstractRequest
{

    public function getUrlPath(): string
    {
        return "/order/replyService";
    }


}
