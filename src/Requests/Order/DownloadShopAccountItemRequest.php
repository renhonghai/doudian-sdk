<?php

namespace Renhonghai\DoudianSDK\Requests\Order;

use Renhonghai\DoudianSDK\Requests\AbstractRequest;

class DownloadShopAccountItemRequest extends AbstractRequest
{

	public function getUrlPath(): string
	{
		return "/order/downloadShopAccountItem";
	}


}
