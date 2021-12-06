<?php

namespace AK\DoudianSDK\Requests\Address;

use AK\DoudianSDK\Requests\AbstractRequest;

class UpdateRequest extends AbstractRequest
{

	public function getUrlPath(): string
	{
		return "/address/update";
	}


}
