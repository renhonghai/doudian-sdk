<?php

namespace Renhonghai\DoudianSDK\Requests\Warehouse;

use Renhonghai\DoudianSDK\Requests\AbstractRequest;

class RemoveAddrRequest extends AbstractRequest
{

	public function getUrlPath(): string
	{
		return "/warehouse/removeAddr";
	}


}
