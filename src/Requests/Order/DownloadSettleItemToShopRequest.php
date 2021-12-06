<?php

namespace AK\DoudianSDK\Requests\Order;

use AK\DoudianSDK\Requests\AbstractRequest;

class DownloadSettleItemToShopRequest extends AbstractRequest
{

	public function getUrlPath(): string
	{
		return "/order/downloadSettleItemToShop";
	}


}
