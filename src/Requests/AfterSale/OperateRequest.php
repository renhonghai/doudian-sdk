<?php

namespace Renhonghai\DoudianSDK\Requests\AfterSale;

use Renhonghai\DoudianSDK\Requests\AbstractRequest;

class OperateRequest extends AbstractRequest
{

	public function getUrlPath(): string
	{
		return "/afterSale/Operate";
	}


}
