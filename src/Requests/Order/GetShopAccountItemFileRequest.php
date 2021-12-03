<?php

namespace Renhonghai\DoudianSDK\Requests\Order;

use Renhonghai\DoudianSDK\Requests\AbstractRequest;

class GetShopAccountItemFileRequest extends AbstractRequest
{

	public function getUrlPath(): string
	{
		return "/order/getShopAccountItemFile";
	}


}
