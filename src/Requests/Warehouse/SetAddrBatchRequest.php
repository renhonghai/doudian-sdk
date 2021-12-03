<?php

namespace Renhonghai\DoudianSDK\Requests\Warehouse;

use Renhonghai\DoudianSDK\Requests\AbstractRequest;

class SetAddrBatchRequest extends AbstractRequest
{

	public function getUrlPath(): string
	{
		return "/warehouse/setAddrBatch";
	}


}
