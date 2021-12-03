<?php

namespace Renhonghai\DoudianSDK\Requests\Address;

use Renhonghai\DoudianSDK\Requests\AbstractRequest;

class UpdateRequest extends AbstractRequest
{

	public function getUrlPath(): string
	{
		return "/address/update";
	}


}
