<?php

namespace Renhonghai\DoudianSDK\Requests\Logistics;

use Renhonghai\DoudianSDK\Requests\AbstractRequest;

class CreateSFOrderRequest extends AbstractRequest
{

	public function getUrlPath(): string
	{
		return "/logistics/createSFOrder";
	}


}
