<?php

namespace AK\DoudianSDK\Requests\Shop;

use AK\DoudianSDK\Requests\AbstractRequest;

class BrandListRequest extends AbstractRequest
{

	public function getUrlPath(): string
	{
		return "/shop/brandList";
	}


}
