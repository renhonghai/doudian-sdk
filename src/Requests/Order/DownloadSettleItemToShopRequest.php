<?php

namespace Renhonghai\DoudianSDK\Requests\Order;

use Renhonghai\DoudianSDK\Requests\AbstractRequest;

class DownloadSettleItemToShopRequest extends AbstractRequest
{

	public function getUrlPath(): string
	{
		return "/order/downloadSettleItemToShop";
	}


}
