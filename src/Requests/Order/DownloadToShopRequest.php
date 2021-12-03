<?php

namespace Renhonghai\DoudianSDK\Requests\Order;

use Renhonghai\DoudianSDK\Requests\AbstractRequest;

class DownloadToShopRequest extends AbstractRequest
{

	public function getUrlPath(): string
	{
		return "/order/downloadToShop";
	}


}
