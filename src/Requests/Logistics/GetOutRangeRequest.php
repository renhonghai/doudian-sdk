<?php

namespace Renhonghai\DoudianSDK\Requests\Logistics;

use Renhonghai\DoudianSDK\Requests\AbstractRequest;

class GetOutRangeRequest extends AbstractRequest
{

	public function getUrlPath(): string
	{
		return "/logistics/getOutRange";
	}


}
