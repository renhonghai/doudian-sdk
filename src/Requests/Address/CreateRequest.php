<?php

namespace AK\DoudianSDK\Requests\Address;

use AK\DoudianSDK\Requests\AbstractRequest;

class CreateRequest extends AbstractRequest
{

	public function getUrlPath(): string
	{
		return "/address/create";
	}


}
