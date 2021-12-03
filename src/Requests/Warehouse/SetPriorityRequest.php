<?php

namespace Renhonghai\DoudianSDK\Requests\Warehouse;

use Renhonghai\DoudianSDK\Requests\AbstractRequest;

class SetPriorityRequest extends AbstractRequest
{

	public function getUrlPath(): string
	{
		return "/warehouse/setPriority";
	}


}
