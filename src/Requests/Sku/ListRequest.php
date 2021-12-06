<?php

namespace AK\DoudianSDK\Requests\Sku;

use AK\DoudianSDK\Requests\AbstractRequest;

class ListRequest extends AbstractRequest
{

	public function getUrlPath(): string
	{
		return "/sku/list";
	}


}
