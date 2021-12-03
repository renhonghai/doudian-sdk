<?php

namespace Renhonghai\DoudianSDK\Requests\AfterSale;

use Renhonghai\DoudianSDK\Requests\AbstractRequest;

class TimeExtendRequest extends AbstractRequest
{

	public function getUrlPath(): string
	{
		return "/afterSale/timeExtend";
	}


}
