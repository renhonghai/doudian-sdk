<?php

namespace Renhonghai\DoudianSDK\Requests\Logistics;

use Renhonghai\DoudianSDK\Requests\AbstractRequest;

class CustomTemplateListRequest extends AbstractRequest
{

	public function getUrlPath(): string
	{
		return "/logistics/customTemplateList";
	}


}
