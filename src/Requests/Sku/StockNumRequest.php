<?php

namespace Renhonghai\DoudianSDK\Requests\Sku;

use Renhonghai\DoudianSDK\Requests\AbstractRequest;

class StockNumRequest extends AbstractRequest
{

	public function getUrlPath(): string
	{
		return "/sku/stockNum";
	}


}
