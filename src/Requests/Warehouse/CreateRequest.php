<?php

namespace Renhonghai\DoudianSDK\Requests\Warehouse;

use Renhonghai\DoudianSDK\Requests\AbstractRequest;

class CreateRequest extends AbstractRequest
{

	public function getUrlPath(): string
	{
		return "/warehouse/create";
	}


}
