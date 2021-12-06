<?php

namespace AK\DoudianSDK\Requests\Product;

use AK\DoudianSDK\Requests\AbstractRequest;

class EditBuyerLimitRequest extends AbstractRequest
{

	public function getUrlPath(): string
	{
		return "/product/editBuyerLimit";
	}


}
