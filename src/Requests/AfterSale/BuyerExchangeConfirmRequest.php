<?php

namespace AK\DoudianSDK\Requests\AfterSale;

use AK\DoudianSDK\Requests\AbstractRequest;

class BuyerExchangeConfirmRequest extends AbstractRequest
{

	public function getUrlPath(): string
	{
		return "/afterSale/buyerExchangeConfirm";
	}


}
