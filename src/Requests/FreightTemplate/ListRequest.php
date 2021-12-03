<?php

namespace Renhonghai\DoudianSDK\Requests\FreightTemplate;

use Renhonghai\DoudianSDK\Requests\AbstractRequest;

class ListRequest extends AbstractRequest
{

	public function getUrlPath(): string
	{
		return "/freightTemplate/list";
	}


}
