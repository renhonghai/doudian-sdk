<?php

namespace Renhonghai\DoudianSDK\Requests\Address;

use Renhonghai\DoudianSDK\Requests\AbstractRequest;

class CreateRequest extends AbstractRequest
{

	public function getUrlPath(): string
	{
		return "/address/create";
	}


}
