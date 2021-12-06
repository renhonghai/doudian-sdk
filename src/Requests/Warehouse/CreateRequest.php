<?php

namespace AK\DoudianSDK\Requests\Warehouse;

use AK\DoudianSDK\Requests\AbstractRequest;

class CreateRequest extends AbstractRequest
{

	public function getUrlPath(): string
	{
		return "/warehouse/create";
	}


}
