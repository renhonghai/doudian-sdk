<?php

namespace AK\DoudianSDK\Requests\Logistics;

use AK\DoudianSDK\Requests\AbstractRequest;

class GetOutRangeRequest extends AbstractRequest
{

	public function getUrlPath(): string
	{
		return "/logistics/getOutRange";
	}


}
