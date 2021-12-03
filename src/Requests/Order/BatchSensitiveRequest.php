<?php

namespace Renhonghai\DoudianSDK\Requests\Order;

use Renhonghai\DoudianSDK\Requests\AbstractRequest;

class BatchSensitiveRequest extends AbstractRequest
{

	public function getUrlPath(): string
	{
		return "/order/batchSensitive";
	}


}
