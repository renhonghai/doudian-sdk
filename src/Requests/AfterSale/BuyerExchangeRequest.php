<?php

namespace AK\DoudianSDK\Requests\AfterSale;

use AK\DoudianSDK\Requests\AbstractRequest;

class BuyerExchangeRequest extends AbstractRequest
{

	public function getUrlPath(): string
	{
		return "/afterSale/buyerExchange";
	}


}
