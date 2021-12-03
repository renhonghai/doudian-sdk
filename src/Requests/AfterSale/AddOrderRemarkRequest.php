<?php

namespace Renhonghai\DoudianSDK\Requests\AfterSale;

use Renhonghai\DoudianSDK\Requests\AbstractRequest;

class AddOrderRemarkRequest extends AbstractRequest
{

	public function getUrlPath(): string
	{
		return "/afterSale/addOrderRemark";
	}


}
