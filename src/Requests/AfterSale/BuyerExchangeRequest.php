<?php

namespace Renhonghai\DoudianSDK\Requests\AfterSale;

use Renhonghai\DoudianSDK\Requests\AbstractRequest;

class BuyerExchangeRequest extends AbstractRequest
{

	public function getUrlPath(): string
	{
		return "/afterSale/buyerExchange";
	}


}
