<?php

namespace Renhonghai\DoudianSDK\Requests\AfterSale;

use Renhonghai\DoudianSDK\Requests\AbstractRequest;

class BuyerExchangeConfirmRequest extends AbstractRequest
{

	public function getUrlPath(): string
	{
		return "/afterSale/buyerExchangeConfirm";
	}


}
