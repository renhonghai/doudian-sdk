<?php

namespace Renhonghai\DoudianSDK\Requests\Order;

use Renhonghai\DoudianSDK\Requests\AbstractRequest;

class BatchEncryptRequest extends AbstractRequest
{

	public function getUrlPath(): string
	{
		return "/order/batchEncrypt";
	}


}
