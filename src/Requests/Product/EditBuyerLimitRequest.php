<?php

namespace Renhonghai\DoudianSDK\Requests\Product;

use Renhonghai\DoudianSDK\Requests\AbstractRequest;

class EditBuyerLimitRequest extends AbstractRequest
{

	public function getUrlPath(): string
	{
		return "/product/editBuyerLimit";
	}


}
