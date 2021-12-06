<?php

namespace AK\DoudianSDK\Requests\Sku;

use AK\DoudianSDK\Requests\AbstractRequest;

class DetailRequest extends AbstractRequest
{

	public function getUrlPath(): string
	{
		return "/sku/detail";
	}


}
