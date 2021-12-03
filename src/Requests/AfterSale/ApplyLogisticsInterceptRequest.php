<?php

namespace Renhonghai\DoudianSDK\Requests\AfterSale;

use Renhonghai\DoudianSDK\Requests\AbstractRequest;

class ApplyLogisticsInterceptRequest extends AbstractRequest
{

	public function getUrlPath(): string
	{
		return "/afterSale/applyLogisticsIntercept";
	}


}
