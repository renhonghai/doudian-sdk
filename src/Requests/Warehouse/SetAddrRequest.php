<?php

namespace AK\DoudianSDK\Requests\Warehouse;

use AK\DoudianSDK\Requests\AbstractRequest;

class SetAddrRequest extends AbstractRequest
{

	public function getUrlPath(): string
	{
		return "/warehouse/setAddr";
	}


}
