<?php

namespace Renhonghai\DoudianSDK\Requests\Logistics;

use Renhonghai\DoudianSDK\Requests\AbstractRequest;

class WaybillApplyRequest extends AbstractRequest
{

	public function getUrlPath(): string
	{
		return "/logistics/waybillApply";
	}


}
