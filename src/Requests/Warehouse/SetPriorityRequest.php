<?php

namespace AK\DoudianSDK\Requests\Warehouse;

use AK\DoudianSDK\Requests\AbstractRequest;

class SetPriorityRequest extends AbstractRequest
{

	public function getUrlPath(): string
	{
		return "/warehouse/setPriority";
	}


}
