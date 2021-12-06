<?php

namespace AK\DoudianSDK\Requests\Sku;

use AK\DoudianSDK\Requests\AbstractRequest;

class StockNumRequest extends AbstractRequest
{

	public function getUrlPath(): string
	{
		return "/sku/stockNum";
	}


}
