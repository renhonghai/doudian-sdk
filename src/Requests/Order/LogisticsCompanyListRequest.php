<?php

namespace Renhonghai\DoudianSDK\Requests\Order;

use Renhonghai\DoudianSDK\Requests\AbstractRequest;

class LogisticsCompanyListRequest extends AbstractRequest
{

	public function getUrlPath(): string
	{
		return "/order/logisticsCompanyList";
	}


}
