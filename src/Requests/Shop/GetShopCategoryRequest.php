<?php

namespace AK\DoudianSDK\Requests\Shop;

use AK\DoudianSDK\Requests\AbstractRequest;

class GetShopCategoryRequest extends AbstractRequest
{

	public function getUrlPath(): string
	{
		return "/shop/getShopCategory";
	}


}
