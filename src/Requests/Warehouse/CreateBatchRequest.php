<?php

namespace Renhonghai\DoudianSDK\Requests\Warehouse;

use Renhonghai\DoudianSDK\Requests\AbstractRequest;

class CreateBatchRequest extends AbstractRequest
{

	public function getUrlPath(): string
	{
		return "/warehouse/createBatch";
	}


}
