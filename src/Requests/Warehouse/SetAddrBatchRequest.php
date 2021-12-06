<?php

namespace AK\DoudianSDK\Requests\Warehouse;

use AK\DoudianSDK\Requests\AbstractRequest;

class SetAddrBatchRequest extends AbstractRequest
{

	public function getUrlPath(): string
	{
		return "/warehouse/setAddrBatch";
	}


}
