<?php

namespace AK\DoudianSDK\Requests\Product;

use AK\DoudianSDK\Requests\AbstractRequest;

class ListV2Request extends AbstractRequest
{

	public function getUrlPath(): string
	{
		return "/product/listV2";
	}


}
