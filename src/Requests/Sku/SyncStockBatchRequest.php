<?php

namespace Renhonghai\DoudianSDK\Requests\Sku;

use Renhonghai\DoudianSDK\Requests\AbstractRequest;

class SyncStockBatchRequest extends AbstractRequest
{

	public function getUrlPath(): string
	{
		return "/sku/syncStockBatch";
	}


}
