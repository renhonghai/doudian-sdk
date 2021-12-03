<?php

namespace Renhonghai\DoudianSDK\Requests\Order;

use Renhonghai\DoudianSDK\Requests\AbstractRequest;

class BatchDecryptRequest extends AbstractRequest
{

	public function getUrlPath(): string
	{
		return "/order/batchDecrypt";
	}


}
