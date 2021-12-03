<?php

namespace Renhonghai\DoudianSDK\Requests\Product;

use Renhonghai\DoudianSDK\Requests\AbstractRequest;

class ListV2Request extends AbstractRequest
{

	public function getUrlPath(): string
	{
		return "/product/listV2";
	}


}
