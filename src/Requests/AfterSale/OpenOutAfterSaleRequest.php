<?php

namespace AK\DoudianSDK\Requests\AfterSale;

use AK\DoudianSDK\Requests\AbstractRequest;

class OpenOutAfterSaleRequest extends AbstractRequest
{

	public function getUrlPath(): string
	{
		return "/afterSale/openOutAfterSale";
	}


}
