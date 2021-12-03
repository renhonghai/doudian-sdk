<?php

namespace Renhonghai\DoudianSDK\Requests\Product;

use Renhonghai\DoudianSDK\Requests\AbstractRequest;

class DetailRequest extends AbstractRequest
{

	public function getUrlPath(): string
	{
		return "/product/detail";
	}


}
