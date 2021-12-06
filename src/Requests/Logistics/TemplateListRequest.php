<?php

namespace AK\DoudianSDK\Requests\Logistics;

use AK\DoudianSDK\Requests\AbstractRequest;

class TemplateListRequest extends AbstractRequest
{

	public function getUrlPath(): string
	{
		return "/logistics/templateList";
	}


}
