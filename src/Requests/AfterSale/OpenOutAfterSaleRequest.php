<?php

namespace Renhonghai\DoudianSDK\Requests\AfterSale;

use Renhonghai\DoudianSDK\Requests\AbstractRequest;

class OpenOutAfterSaleRequest extends AbstractRequest
{

	public function getUrlPath(): string
	{
		return "/afterSale/openOutAfterSale";
	}


}
