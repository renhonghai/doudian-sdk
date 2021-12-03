<?php

namespace Renhonghai\DoudianSDK\Requests\Product;

use Renhonghai\DoudianSDK\Requests\AbstractRequest;

class SetOnlineRequest extends AbstractRequest
{

	public function getUrlPath(): string
	{
		return "/product/setOnline";
	}


}
