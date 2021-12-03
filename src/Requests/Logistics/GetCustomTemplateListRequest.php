<?php

namespace Renhonghai\DoudianSDK\Requests\Logistics;

use Renhonghai\DoudianSDK\Requests\AbstractRequest;

class GetCustomTemplateListRequest extends AbstractRequest
{

	public function getUrlPath(): string
	{
		return "/logistics/getCustomTemplateList";
	}


}
