<?php

namespace Renhonghai\DoudianSDK\Requests\Product;

use Renhonghai\DoudianSDK\Requests\AbstractRequest;

class AddV2Request extends AbstractRequest
{

	public function getUrlPath(): string
	{
		return "/product/addV2";
	}


}
