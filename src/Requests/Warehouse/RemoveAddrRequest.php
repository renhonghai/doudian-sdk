<?php

namespace AK\DoudianSDK\Requests\Warehouse;

use AK\DoudianSDK\Requests\AbstractRequest;

class RemoveAddrRequest extends AbstractRequest
{

	public function getUrlPath(): string
	{
		return "/warehouse/removeAddr";
	}


}
