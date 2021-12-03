<?php

namespace Renhonghai\DoudianSDK\Requests\Sku;

use Renhonghai\DoudianSDK\Requests\AbstractRequest;

class SyncStockRequest extends AbstractRequest
{

	public function getUrlPath(): string
	{
		return "/sku/syncStock";
	}


}
