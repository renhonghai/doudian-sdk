<?php

namespace Renhonghai\DoudianSDK\Requests\Logistics;

use Renhonghai\DoudianSDK\Requests\AbstractRequest;

class TemplateListRequest extends AbstractRequest
{

	public function getUrlPath(): string
	{
		return "/logistics/templateList";
	}


}
