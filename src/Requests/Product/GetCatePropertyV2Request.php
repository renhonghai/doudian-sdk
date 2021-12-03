<?php

namespace Renhonghai\DoudianSDK\Requests\Product;

use Renhonghai\DoudianSDK\Requests\AbstractRequest;

class GetCatePropertyV2Request extends AbstractRequest
{

	public function getUrlPath(): string
	{
		return "/product/getCatePropertyV2";
	}


}
