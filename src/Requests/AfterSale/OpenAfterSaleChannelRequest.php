<?php

namespace Renhonghai\DoudianSDK\Requests\AfterSale;

use Renhonghai\DoudianSDK\Requests\AbstractRequest;

class OpenAfterSaleChannelRequest extends AbstractRequest
{

	public function getUrlPath(): string
	{
		return "/afterSale/OpenAfterSaleChannel";
	}


}
