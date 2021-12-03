<?php

namespace Renhonghai\DoudianSDK\Requests\AfterSale;

use Renhonghai\DoudianSDK\Requests\AbstractRequest;

class CancelSendGoodsSuccessRequest extends AbstractRequest
{

	public function getUrlPath(): string
	{
		return "/afterSale/CancelSendGoodsSuccess";
	}


}
