<?php

namespace Renhonghai\DoudianSDK\Requests\Sku;

use Renhonghai\DoudianSDK\Requests\AbstractRequest;

class DetailRequest extends AbstractRequest
{

	public function getUrlPath(): string
	{
		return "/sku/detail";
	}


}
