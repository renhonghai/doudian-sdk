<?php

namespace AK\DoudianSDK\Requests\Order;

use AK\DoudianSDK\Requests\AbstractRequest;

class BatchSearchIndexRequest extends AbstractRequest
{

	public function getUrlPath(): string
	{
		return "/order/BatchSearchIndex";
	}


}
