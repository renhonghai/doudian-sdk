<?php

namespace Renhonghai\DoudianSDK\Requests\Brand;

use Renhonghai\DoudianSDK\Requests\AbstractRequest;

class ListRequest extends AbstractRequest
{

	public function getUrlPath(): string
	{
		return "/brand/list";
	}


}
