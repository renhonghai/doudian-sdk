<?php

namespace Renhonghai\DoudianSDK\Requests\AfterSale;

use Renhonghai\DoudianSDK\Requests\AbstractRequest;

class ReturnGoodsToWareHouseSuccessRequest extends AbstractRequest
{

	public function getUrlPath(): string
	{
		return "/afterSale/returnGoodsToWareHouseSuccess";
	}


}
