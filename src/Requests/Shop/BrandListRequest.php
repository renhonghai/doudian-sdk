<?php

namespace Renhonghai\DoudianSDK\Requests\Shop;

use Renhonghai\DoudianSDK\Requests\AbstractRequest;

class BrandListRequest extends AbstractRequest
{

	public function getUrlPath(): string
	{
		return "/shop/brandList";
	}


}
