<?php

namespace AK\DoudianSDK\Requests\AfterSale;

use AK\DoudianSDK\Requests\AbstractRequest;

class AddOrderRemarkRequest extends AbstractRequest
{

	public function getUrlPath(): string
	{
		return "/afterSale/addOrderRemark";
	}


}
