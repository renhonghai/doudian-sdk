<?php

namespace Renhonghai\DoudianSDK\Requests\Order;

use Renhonghai\DoudianSDK\Requests\AbstractRequest;

class ReplyServiceRequest extends AbstractRequest
{

	public function getUrlPath(): string
	{
		return "/order/replyService";
	}


}
