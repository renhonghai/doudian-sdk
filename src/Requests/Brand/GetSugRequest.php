<?php

namespace Renhonghai\DoudianSDK\Requests\Brand;

use Renhonghai\DoudianSDK\Requests\AbstractRequest;

class GetSugRequest extends AbstractRequest
{

	public function getUrlPath(): string
	{
		return "/brand/getSug";
	}


}
