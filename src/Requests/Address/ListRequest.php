<?php

namespace Renhonghai\DoudianSDK\Requests\Address;

use Renhonghai\DoudianSDK\Requests\AbstractRequest;

class ListRequest extends AbstractRequest
{

	public function getUrlPath(): string
	{
		return "/address/list";
	}


}
